var $nav = $('nav');
var $navTop = $nav.offset().top;

var pegarNav= function() {
	var $scrollTop = $(window).scrollTop();
	if($scrollTop >= $navTop){
		$nav.addClass('stick');
	}else{
		$nav.removeClass('stick');
	}
}


$(window).on('scroll', pegarNav);
	

// $(window).on('scroll', function() {
// 	var $scrollTop= $(window).scrollTop();
// 	$('nav').text('El scrollTop es '+ $scrollTop +'px');
// })