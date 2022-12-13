//Retourner carte
var valueA = 0;

function test(){
	if(valueA == 0){
			document.getElementById('card-container').style.transform = "rotateY(0.5turn)";
			valueA = 1;
	}
	else{
		document.getElementById('card-container').style.transform = "rotateY(0turn)";
		valueA = 0;
	}
}

//ecran
if(screen.width<1366 && screen.height<768){
	document.body.style.backgroundImage = "none";
	document.body.style.backgroundColor = "#9F8141";
}
else{
	document.body.style.backgroundImage = "url('https://images5.alphacoders.com/742/742631.jpg')";
}