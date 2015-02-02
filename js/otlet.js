var player = document.getElementById("player");
var vol = 100;
var num = 10;
var proc = "";
var kanal = "Kanał Główny";

function play(adress,kanal){
	document.getElementById("player").pause();
	document.getElementById("player").src=adress;
	document.getElementById("player").play();
	document.getElementById("kanal").innerHTML = kanal;
}

function pause(){
	document.getElementById("player").pause();
	document.getElementById("player").src='';
	kanal = "Radio wyłączone";
	document.getElementById("kanal").innerHTML = kanal;
}

function volup(){
	document.getElementById("player").volume += 0.1;
	if(vol+num<=100){
		vol+=num;
		document.getElementById("vol").innerHTML = vol;
	}
}

function voldown(){
	document.getElementById("player").volume -= 0.1;
	if(vol+num>=0){
		vol-=num;
		document.getElementById("vol").innerHTML = vol;
	}
}