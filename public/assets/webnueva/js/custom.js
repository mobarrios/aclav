// Add your custom JS code here

// aparecer y desaparecer fases del calendario.html -Chaco

function showMe () {
	var vis;
	var box;
	for (i=1;i<=3;i++){
		box = document.getElementById('fase' + i);
		vis = (box.checked) ? "block" : "none";
		document.getElementById('oculto' + i).style.display = vis;
	}
}