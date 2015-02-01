<?php
/**
 * Author: Otlet
 * 2015 eSportStacja
 */

class radio {
    public static function status($ip,$port){
        $online = '<font color="#00FF00">ON</font>';
        $offline = '<font color="#FF0000">OFF</font>';

        //$ip = "s1.thekrzos.eu";
        //$port = "8700";
        $fp = @fsockopen($ip,$port,$errno,$errstr,1);

        if (!$fp) {
            $status = $offline;
        } else {
            fputs($fp, "GET /7.html HTTP/1.0\r\nUser-Agent: Mozilla\r\n\r\n");
            while (!feof($fp)) {
                $info = fgets($fp);
            }
            $split = explode(',', $info);
            if ($split[1] == "0") {
                $status = $offline;
            } else {
                $status = $online;
            }
        }
        echo $status;
    }
}