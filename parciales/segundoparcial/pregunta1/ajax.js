function llamarbotones(abrir) {
	var contenedor;
	contenedor = document.getElementById('menu');
	var ajax = new XMLHttpRequest()  
	ajax.open("get", abrir, true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			console.log(ajax)
			console.log(abrir)
			console.log(contenedor)
			contenedor.innerHTML = ajax.response
		}
	}
	ajax.setRequestHeader("Content-Type");
	ajax.send();
}