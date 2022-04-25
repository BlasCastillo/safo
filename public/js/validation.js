const correo = document.getElementById('correo')
const clave = document.getElementById('clave')
const parrafo = document.getElementById('parrafo')

form.addEventListener("submit", e=>{

	if (correo.value.legth < 6 ) {

		alert("nombre corto")
	}
});