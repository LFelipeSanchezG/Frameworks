$(document).ready(function(){
	$("#materias").click(function(){
		//$(this).append("<li>Modelado Digital</li>");
		$(this).fadeOut("slow")

	});

	$("#nombre").val("Escribe tu nombre");
	$("#nombre").click(function(){
		$("#nombre").val("");
	});

	$("#boton").click(function(){
		alert($("#nombre").val());
		return false;
	});

	$("#agregar").click(function(){
		$("form").append("<input type='text' name='nombre'><br>");
		return false;
	});
});