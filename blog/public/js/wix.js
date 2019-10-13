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

	$("#img-detalles").click(function(){
		$("#img-full").slideDown("slow");
	});

	$("#img-full").click(function(){
		$("#img-full").slideUp("slow");
	});

	$(".detalles-producto").click(function(){
		//var producto=$(this).parent().parent().find(".producto-nombre").text();
			//$("#modal-titulo").text(producto);
			$(this).parent().parent().find("td").each(function(i){
				switch(i){
					case 1:
						$("#modal-img").attr("src",$(this).children().attr("src"));
						$("#modal-descripcion").text($(this).children().attr("alt"));
						break;
					case 2:
						$("#modal-titulo").text($(this).text());
						break;
					default:
						break;
				}
			});
		$("#producto-modal").modal("show");
	});

});