var count = 1, total = 3 ;
var image = document.getElementById("simg");
var caption = document.getElementById("scaption");
var newCaption = [];//array
newCaption[0] = "GCES BUILDING.";
newCaption[1] = "PRESENT ROUTINE.";
newCaption[2] = "STUDENTS SEARCHING BOOKS";

function slide(a){
	count = count + a;
	if(count < 1 ){ count = total; }
	if(count > total ){ count = 1; }
	image.src = "images/gces" + count + ".jpg";
	caption.textContent = newCaption[count-1];
}
window.setInterval(function slideAuto(){
	count++;
	if(count > total ){ count = 1; }
	image.src = "images/gces" + count + ".jpg";
	caption.textContent = newCaption[count-1];
},6000);