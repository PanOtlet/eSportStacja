<?php
/**
 * Author: Otlet
 * 2015 eSportStacja
 */
	require_once ("./inc/radio.php");
	$radio = new radio;
?>
<!DOCTYPE html>
<html class="full" lang="pl">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Expires" content="0" />
	<meta http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate" />
	<meta http-equiv="Cache-Control" content="post-check=0, pre-check=0" />
	<meta http-equiv="Pragma" content="no-cache" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="Pierwsze w Polsce internetowe radio ukierunkowane w stronę esportu! Audycje i muzyka! Co potrzeba więcej!?">
    <meta name="author" content="Otlet">

    <title>eSport-Stacja.pl</title>

    <link href="./css/bootstrap.css" rel="stylesheet">
    <link href="./css/otlet.css" rel="stylesheet">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<script type="text/javascript">
			var player = document.getElementById("player");
			var vol = 100;
			var num = 10;
			var proc = "";
			var kanal = "Kanał Główny";
			
            function newplayer(){
				window.open("http://esport-stacja.pl/mini.html", "okienko", "toolbar=no, menubar=no, location=no, personalbar=no, status=no, resizable=no, scrollbars=no, copyhistory=yes, width=400, height=585, top=0, left=0");
            }
			
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
    </script>
	
</head>

<body>

	<audio id="player"  src="http://s1.thekrzos.eu:8700/;stream.mp3" type="audio/mpeg" autoplay="" loop="" class="center-block" style="width: 100%">
		Twoja przeglądarka nie obsługuje HTML5.<br /><a href="http://www.browserchoice.eu/BrowserChoice/browserchoice_pl.htm">Wybierz najnowszą przeglądarkę</a>
	</audio>

	<div class="container">
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="align: center">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php">eSport-Stacja.pl</a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li>
							<div class="btn-group">
								<button type="button" class="btn btn-success disabled"><y id="kanal">Kanał Główny</y></button>
								<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<span class="glyphicon glyphicon-play" aria-hidden="true"></span> Play <span class="caret"></span>
								</button>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#" onclick="play('http://s1.thekrzos.eu:8700/;stream.mp3','Kanał Główny')"><i class="fa fa-globe"></i> Kanał Główny <?php $radio->status("s1.thekrzos.eu",8700)?></a></li>
									<li><a href="#" onclick="play('http://4stream.pl:18492/;stream.mp3','Kanał Rock')"><i class="fa fa-bolt"></i> Kanał Rock <?php $radio->status("4stream.pl",18492)?></a></li>
									<li class="divider"></li>
									<li><a href="#" onclick="pause()"><span class="glyphicon glyphicon-pause" aria-hidden="true"></span> Pause</a></li>
								</ul>
							</div>
							<div class="btn-group" role="group" aria-label="sterowanie">
								<button class="btn navbar-btn btn-info" onclick="volup()"><span class="glyphicon glyphicon-plus-sign"></span></button>
								<button class="btn navbar-btn btn-info disabled"><y id="vol">100</y>%</button>
								<button class="btn navbar-btn btn-info" onclick="voldown()"><span class="glyphicon glyphicon-minus-sign"></span></button>
							</div>
							<div class="btn-group" role="group" aria-label="sterowanie">
								<a class="btn navbar-btn btn-warning" onclick="player()"><span class="glyphicon glyphicon-headphones"></span></a>
								<a href="http://s1.thekrzos.eu:8700/listen.pls" class="btn navbar-btn btn-warning"><span class="glyphicon glyphicon-floppy-disk"></span></a>
							</div>
							<div class="btn-group" role="group">
							</div>
						</li>
						<li class="dropdown">
							<a id="info" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
								Informacje
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu" role="menu" aria-labelledby="info">
								<li>
									<a href="#o-nas" role="button" class="btn" data-toggle="modal">O Nas</a>
								</li>
								<li>
									<a href="#prezenterzy" role="button" class="btn" data-toggle="modal">Ekipa</a>
								</li>
								<li>
									<a href="#kontakt" role="button" class="btn" data-toggle="modal" >Kontakt</a>
								</li>
								<li>
									<a href="#zaiks" role="button" class="btn" data-toggle="modal">ZAiKS</a>
								</li>
								<li>
									<a href="#partnerzy" role="button" class="btn" data-toggle="modal">Sponsorzy i partnerzy</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#pozdrowienia" role="button" class="btn" data-toggle="modal">Pozdrowienia</a>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="esport.apk" role="button" class="btn" target="_blank"><i class="fa fa-android"></i> Aplikacja Android</a>
						</li>
						<li>
							<a href="dev.php" role="button" class="btn"><i class="fa fa-connectdevelop"></i></a>
						</li>
						<li>
							<a href="https://www.facebook.com/pages/ESport-Stacja/430678703750233" role="button" class="btn" target="_blank"><i class="fa fa-facebook"></i></a>
						</li>
						<li>
							<a href="https://twitter.com/PanOtlet" role="button" class="btn" target="_blank"><i class="fa fa-twitter"></i></a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		
		<div class="main">
			<div class="panel panel-danger panel-twitter">
				<div class="panel-heading">Najnowsze informacje</div>
				<div class="panel-body">
					<a class="twitter-timeline" width="500" height="600" href="https://twitter.com/hashtag/esportstacja" data-chrome="noscrollbar transparent" data-widget-id="554310779542208512">tweety o #esportstacja</a>
					<script>
						!function(d,s,id){
							var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
							if(!d.getElementById(id)){
								js=d.createElement(s);
								js.id=id;
								js.src=p+"://platform.twitter.com/widgets.js";
								fjs.parentNode.insertBefore(js,fjs);}
						}
						(document,"script","twitter-wjs");
					</script>
				</div>
			</div>
		</div>
		
		<div class="modal fade" id="o-nas" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						<h4 class="modal-title" id="myModalLabel">O Nas</h4>
					</div>
					<div class="modal-body"><center>
						<img src="img/logom.png" class="img-responsive">
						Jesteśmy młodymi ludźmi, którzy są pasjonatami nie tylko muzyki, ale i elektronicznych sportów!</center>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Zamknij</button>
					</div>
				</div>
			</div>
		</div>
		
		<div class="modal fade" id="otlet" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						<h4 class="modal-title" id="myModalLabel">Kto to Otlet?</h4>
					</div>
					<div class="modal-body">
						<p>Serio... Jeśli już go szukałeś to serio musisz się leczyć. Polecam poszukać go w internetach jako PanOtlet, bo Otlet to był jakiś ziomek co coś tam zrobił :3 Pozdro za znalezienie tego xD
						<a href="http://katalogseo.net.pl/" title="Strony WWW">Katalog SEO</a> to lista ciekawych stron.<script type="text/javascript" src="http://katalogseo.net.pl:4444/link-check.js"></script><a href="http://www.page-rank.pl" title="Google PageRank Checker | Pozycjonowanie | SEO Ranking Stron"><img src="http://www.page-rank.pl/public/site/esport-stacja.pl.png" alt="Google PageRank Checker | Pozycjonowanie | SEO Ranking Stron"/></a>
						</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Zamknij</button>
					</div>
				</div>
			</div>
		</div>
		
		<div class="modal fade" id="prezenterzy" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						<h4 class="modal-title" id="myModalLabel">Ekipa radia</h4>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-md-6">
								<div class="thumbnail">
									<img src="img/otlet.jpg" class="img-responsive img-circle">
									<div class="caption">
										<h3>Pan Otlet</h3>
										<p>Założyciel i właściciel radia.</p>
										<p style="text-align: center">
											<a href="http://fb.com/PanOtlet" class="btn btn-primary" role="button" target="_blank">Facebook</a>
											<a href="mailto:otlet@jest.guru" class="btn btn-default" role="button" target="_blank">E-mail</a></p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="thumbnail">
									<img src="img/sqeez.jpg" class="img-responsive img-circle">
									<div class="caption">
										<h3>DJ Sqeez</h3>
										<p>Prezenter muzyczny</p>
										<p style="text-align: center">
											<a href="https://www.facebook.com/DJSqeez" class="btn btn-primary" role="button">Facebook</a></p>
									</div>
								</div>
							</div>
							<!--<div class="col-md-6">
								<div class="thumbnail">
									<img src="img/need.jpeg" class="img-responsive img-circle">
									<div class="caption">
										<h3>Wolne miejsce</h3>
										<p>Tutaj możesz być Ty!</p>
										<p style="text-align: center">
											<a href="#" class="btn btn-primary" role="button">Fajne</a>
											<a href="#" class="btn btn-default" role="button">Guziki</a></p>
									</div>
								</div>
							</div>-->
							<div class="col-md-12">
								<div class="media">
									<a class="media-left" href="#">
										<img src="img/need.jpeg" class="img-responsive img-circle">
									</a>
									<div class="media-body justify">
										<h4 class="media-heading">Poszukiwani!</h4>
										<p>
											Uwaga! Obecnie poszukujemy chętnych do pomocy przy tworzeniu radia! Każdy chętny jest proszony o pomoc!
											Ciągle poszukujemy ludzi, którzy będą mogli grać na radiu, ale również tworzyć wszelkiego rodzaju podcasty, wiadomości itp.
											To dla nas bardzo ważna rzecz i liczymy na Waszą pomoc!
										</p>
									</div>
								</div>
							</div>
						</div>
						<hr />
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Zamknij</button>
					</div>
				</div>
			</div>
		</div>
		
		<div class="modal fade" id="kontakt" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						<h4 class="modal-title" id="myModalLabel">Kontakt</h4>
					</div>
					<div class="modal-body">
						<address>
							<p class="lead">
								Paweł "Pan Otlet" Otlewski</a><br>
								<abbr title="e-mail">@</abbr>: <a href="mailto:otlet@jest.guru" target="_blank">otlet@jest.guru</a><br>
								<abbr title="Facebook">FB</abbr>: <a href="http://facebook.com/PanOtlet" target="_blank">PanOtlet</a><br>
							</p>
						</address>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Zamknij</button>
					</div>
				</div>
			</div>
		</div>
		
		<div class="modal fade" id="zaiks" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						<h4 class="modal-title" id="myModalLabel">ZAiKS</h4>
					</div>
					<div class="modal-body">
						<p>Radio prezentuje na antenie utwory o obniżonej jakości dźwiękowej w celu popularyzacji ich autorstwa oraz zachęcenia słuchaczy do zakupu oryginalnego nośnika CD z muzyką prezentowanych wykonawców co jest zgodne z ustawą o prawie autorskim z dnia 1 sierpnia 2000 roku.<br />
						Nasze radio emituje muzykę, w celu sprawienia przyjemności słuchaczom. Nie rozpowszechniamy muzyki dla celów komercyjnych. Nie pobieramy żadnych wynagrodzeń z racji działalności radia.<br /><br />

						Gramy szczególnie dla naszych rodzin, znajomych i przyjaciół.</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Zamknij</button>
					</div>
				</div>
			</div>
		</div>
		
		<div class="modal fade" id="partnerzy" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						<h4 class="modal-title" id="myModalLabel">Sponsorzy i partnerzy</h4>
					</div>
					<div class="modal-body">
						<h4 class="modal-title" id="myModalLabel">Sponsorzy</h4>
						<a href="http://djlive.pl/" class="btn btn-lg btn-warning" role="button" target="_blank">DJ Live</a>
						<a href="http://SpisRadiowy.eu/" class="btn btn-lg btn-warning" role="button" target="_blank">SpisRadiowy.eu</a>
						<hr />
						<h4 class="modal-title" id="myModalLabel">Partnerzy</h4>
						<a href="http://SkyGaming.pl" class="btn btn-lg btn-primary" role="button" target="_blank">SkyGaming.pl</a>
						<a href="http://3mod.pl" class="btn btn-lg btn-primary" role="button" target="_blank">3Mod.pl</a>
						<a href="http://23games.me" class="btn btn-lg btn-primary" role="button" target="_blank">23Games</a>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Zamknij</button>
					</div>
				</div>
			</div>
		</div>
		
		<div class="modal fade" id="pozdrowienia" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						<h4 class="modal-title" id="myModalLabel">Pozdrowienia KANAŁ GŁÓWNY</h4>
					</div>
					<div class="modal-body">
						<div class="embed-responsive embed-responsive-4by3">
							<iframe class="embed-responsive-item" src="http://esport-stracja.panelradiowy.pl/embed.php?script=onlineform"></iframe>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Zamknij</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>

<footer class="footer">
	<div class="container">
		<p class="text-muted">
			&copy; 2014-<?php echo date('Y');?> eSport-Stacja.pl <span class="glyphicon glyphicon-fire"></span> Design i kodowanie: <a href="#otlet" data-toggle="modal">Pan Otlet</a>
		</p>
	</div>
</footer>

</html>