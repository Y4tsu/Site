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