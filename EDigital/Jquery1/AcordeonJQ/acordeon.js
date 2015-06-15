$('.acordeon').on('click','h2', function() {
	//$(this).next().slideToggle();
	var t = $(this);//select titulo donde hago click en el moento
	var tp = t.next();//select "p" donde estoy haciendo click
	var p = t.parent().siblings().find('p');//select todos los "p" donde no hago click
	tp.slideToggle();
	p.slideUp();
});