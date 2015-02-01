function player(){
	window.open("http://sluchaj.esport-stacja.pl", "okienko", "toolbar=no, menubar=no, location=no, personalbar=no, status=no, resizable=no, scrollbars=no, copyhistory=yes, width=400, height=585, top=0, left=0");
}

function play(){
	document.getElementById('rock').pause()
	document.getElementById('glowny').play()
}

function play_rock(){
	document.getElementById('glowny').pause()
	document.getElementById('rock').play()
}

function pause(){
	document.getElementById('glowny').pause()
	document.getElementById('rock').pause()
}

function glosniej(){
	document.getElementById('glowny').volume += 0.1;
	document.getElementById('rock').volume += 0.1;
}

function ciszej(){
	document.getElementById('glowny').volume -= 0.1;
	document.getElementById('rock').volume -= 0.1;
}