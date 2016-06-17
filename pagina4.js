function validar() {
	var name= document.getElementById('nombre').value;
	if (name=="") 
	{

		alert('Por favor digite su nombre: ');
		return false;
	}
	var edad= document.getElementById('edad').value;
	if (edad=="") 
	{
		alert('Por favor digite su edad: ');
		return false;
	}
	var peso= document.getElementById('peso').value;
	if (peso=="") 
	{
		alert('Por favor digite su peso: ');
		return false;
	}
	
}
	
function ocultar() {
   document.getElementById('ocultar').style.display= "none";

}

function mostrar() {
   document.getElementById('ocultar').style.display= "block";

}



