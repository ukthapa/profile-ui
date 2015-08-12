
//Container in the center the of viewport
function verticalyCenter(divID) {
	var winHeight = window.innerHeight;
	var divHeight = document.getElementById(divID).clientHeight;


	if(winHeight>divHeight){
			document.getElementById(divID).style.marginTop = ((winHeight-divHeight)/2)+"px";
	}
}



//Form Validation





