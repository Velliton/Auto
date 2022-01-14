$(window).scroll(function(event){
	var s=0-$(this).scrollTop()/3;
	$('.main-screen-bg').css('transform','translate3d(0, '+s+'px, 0)')
})	