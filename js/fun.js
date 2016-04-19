$(document).ready(function(){

	$('#contenedor').show();

	$('#inicio').click(function(){
		$('#contenedor').show();
		$('#contenedor').load('login2.php');
	});
	});

	/*$('#cargar').click(function(){
		$('#mapa').hide();
		$('#contenedor').show();
		$('#contenedor').load('add_archi.html');
	});*/