var $ = jQuery;
var ajaxurl;
var dir;
var hwindow;
var wwindow;
/*
* Helper () isset
* Devuelve si un elemento exista dada su clase
*/
function isset(selector){
  return ($(selector).length ? true : false);
}
/*
* Función onResize()
* Llamada al inicio y cuando la venta se vuelve a ajustar
*/
function onResize(){
   hwindow = $(window).height();
   wwindow = $(window).width();
   /*
   * Helper para clases .full
   * Asigna el alto de tamaño de la ventana
   */
   if(isset('.full')){
     $('.full').height(hwindow);
   }
   /*
   * Helper para clases .min_full
   * El tamaño mínimo del elemento será el alto de la ventana
   */
   if(isset('.min_full')){
     $('.min_full').css('min-height', hwindow+'px');
   }
}
function is_waypoint(e){
  var ot = $(window).scrollTop();
  var ob = ot + hwindow;
  var et = e.offset().top + e.outerHeight();
  if(ot <= et && et <= ob){
    return true;
  }else{
    return false;
  }
}
$(document).ready(function(){
  onResize();

  /* Instancía las variables principales */
  ajaxurl = $('#ajaxurl').val();
  dir = $('#dir').val();

  /*Scroll Menu*/
  //MENU BLOCK
	$('a[href^="#"]').on('click',function (e) {
		e.preventDefault();

		var target = this.hash,
			$target = $(target);

		$('a.menu-item').removeClass('current-menu-item');

		if($(window).outerWidth() > 750) {
			var tope = $(target).scrollTop()*0.4;
		} else {
			if( target != '#ubicacion' ) {
				var tope = $(target).scrollTop()*0.3;
			} else {
				var tope = $('#ubicacion').scrollTop()*0.3;
			}
		}  //if($(window).outerWidth() < 650) {
    $('body').stop().addClass('menu-clone-fixed-body');
		$('.red-menu').stop().addClass('menu-clone-fixed');
		$('html, body').stop().animate({
			'scrollTop': $target.offset().top + tope
		}, 700, 'swing', function () {
			window.location.hash = target;
		}); // end animate

		$(this).addClass('current-menu-item');

		$('html,body').bind("scroll mousedown DOMMouseScroll mousewheel keyup", function(e){
			if ( e.which > 0 || e.type === "mousedown" || e.type === "mousewheel"){
				$('html,body').stop(true);
			}
		});

	}); // end click

	$('.red-menu').mouseenter(function(e) {
		$(this).addClass('menu-hover');
	});

	$('.red-menu').mouseleave(function(e) {
		$(this).removeClass('menu-hover');
	});

	$('span#scroll-down').on('click',function (e) {

		$('a.menu-item').removeClass('current-menu-item');
		$('.red-menu').addClass('menu-clone-fixed');

		if($(window).outerWidth() > 750) {
			var tope = 20;
		}  //if($(window).outerWidth() < 650) {

		$('html, body').stop().animate({
			'scrollTop': $('div#historia').offset().top + tope
		}, 700, 'swing'); // end animate


		$('html,body').bind("scroll mousedown DOMMouseScroll mousewheel keyup", function(e){
			if ( e.which > 0 || e.type === "mousedown" || e.type === "mousewheel"){
				$('html,body').stop(true);
			}
		});

	}); // end click


})
$(window).resize(function(){
  onResize();
})


$(document).scroll(function(){
	var scrollI = $(document).scrollTop();

	var distance = $('#historia').offset().top,
    $window = $(window);

	$window.scroll(function() {
		if ( $window.scrollTop() >= distance ) {
			if( $(".red-menu:not(.menu-clone-fixed)") ) {
        $('body').addClass('menu-clone-f');
				$('.red-menu').stop().addClass('menu-clone-fixed');
			}
		} else {
      $('body').removeClass('menu-clone-f');
			$('.red-menu').stop().removeClass('menu-clone-fixed');
		}
	});
});
$(document).on('click', '#button', function(){

})
$(document).on('submit', '#contact-form', function(e){
  e.preventDefault();
  var t = $(this);
  var obj = {
    action: 'sendemail',
    name: t.find('#name').val(),
    phone: t.find('#phone').val(),
    email: t.find('#email').val(),
    msg: t.find('#msg').val()
  };

  $.post(ajaxurl, obj, function(msg){console.log(msg)}, 'json').always(function(msg){
    t.find('input,textarea').val('');
    $.alert({
    title: '¡Gracias!',
    content: 'Recibimos tu mensaje. Pronto estaremos en contacto.',
    theme: 'supervan',
    animation: 'opacity',
    closeAnimation: 'opacity',
    backgroundDismiss: true,
    buttons: {
      confirm:{
      text: 'Cerrar',
      action: function () {
      }
    },
    }
    });

  })
})
