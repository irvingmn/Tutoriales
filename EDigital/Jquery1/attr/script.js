/*
$('button').on('click', function() {
	$p.toggleClass('alerta'); //al hacer click cambia de color texto
	//$p.toggle();//muestra y oculta el parrafo
	alert($p.text());
})*/

var $dos= $('.alerta2');

$('button').on('click', function() {
	// $dos.append('<br>yhea bitch!!</br>')escribe al final del elemento
	  $dos.prepend('<br>yhea bitch!!</br>')
})

//$('button').attr('disabled', true);desactiva

var $jqh =('jqhtml')
$('#cambiar').on('click', function() {
	 $jqhtml.html('<strong>yhea bitch!!</strong>')
})