$('.dos')
	.siblings()
	.css('color','red');

var $dos= $('.dos');
/*$('button').on('click', function() {
	$dos.css('color','red');
});*/
$('button').on('mouseenter', function() {
		$dos.css('color','blue');
	})
	.on('mouseleave', function(){
		$dos.css('color','initial');
	})


var $div= $('div');
$div
	.children()//busca los hijos del elemento que esten en un mismo nivel
	//find('ul') busca hijos mas profundos del elemento
	.css('border','1px solid orange');