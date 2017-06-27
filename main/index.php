<?php
require_once 'functions.php';
$q = array(
  'title'             => '',
  'path'              => 'home',
  'additionalclasses' => array()
);
get_header($q);
?>

<div class="main-container">
	<div id="home" class="full">
        <img src="<?= asset.'/img/flag.png';?>" alt="Vecchio Forno" class="flag-home" />
        <ul id="slider" class="full">
            <li class="full" style="background-image:url(<?= asset.'/img/1.jpg';?>);"></li>
            <li class="full" style="background-image:url(<?= asset.'/img/2.jpg';?>);"></li>
            <li class="full" style="background-image:url(<?= asset.'/img/3.jpg';?>);"></li>
        </ul> <!-- /slider -->

        <div class="menu-top cx full back-paper">
            <img src="<?= asset.'/img/logo.svg';?>" alt="Vecchio Forno" class="logo-menu" />

            <nav class="main-menu">
                <a href="#reservar" class="menu-item-sec menu-border">Reservar</a>
                <a href="#menu" class="menu-item-sec">Menú</a>
                <a href="#historia" class="menu-item-sec">Historia</a>
                <a href="#ubicacion" class="menu-item-sec">Ubicación</a>
            </nav> <!-- /main-menu -->
            <div class="menu-redes">
              <div class="social-media">
                  <a href="#" class="social-item twitter" target="_blank"></a>
                  <a href="#" class="social-item facebook" target="_blank"></a>
                  <a href="#" class="social-item instagram" target="_blank"></a>
              </div> <!-- /social-media -->

              <span id="scroll-down" class="cx"></span>
            </div>
        </div> <!-- /menu-top -->



        <div class="container-uber">
        	<img src="<?= asset.'/img/logo-uber.svg';?>" alt="Vecchio Forno" class="logo-uber" />
        </div> <!-- /container-uber -->

        <div class="flag-mobile">
        	<a href="#" class="mobile-btn">RSVP</a>
            <a href="#" class="mobile-btn">MENU</a>
        </div> <!-- /flag-mobile -->
	</div> <!-- /home -->

    <div class="red-menu">
        <a class="link-home" href="#home"><img src="<?= asset.'/img/logo-min.svg';?>" alt="Vecchio Forno" class="logo-min" /></a>

        <nav class="clone-menu">
            <a href="#menu" class="menu-item menu-item-1">Menú</a>
            <a href="#historia" class="menu-item menu-item-2">Historia</a>
            <a href="#ubicacion" class="menu-item menu-item-3">Ubicación</a>
        </nav> <!-- /main-menu -->

        <div class="right-content">
            <a href="#" class="rsvp" target="_blank">RSVP</a>
            <img src="<?= asset.'/img/flag.png';?>" alt="Vecchio Forno" class="flag-menu" />

            <div class="social-media">
                <a href="#" class="social-item twitter" target="_blank"></a>
                <a href="#" class="social-item facebook" target="_blank"></a>
                <a href="#" class="social-item instagram" target="_blank"></a>
            </div> <!-- /social-media -->
        </div> <!-- /right-content -->
    </div> <!-- /red-menu -->

    <div id="historia" class="full back-paper">
    	<div class="text-container">
        	<ul id="gallery-movil">
                <li class="full" style="background-image:url(<?= asset.'/img/5.jpg';?>);"></li>
                <li class="full" style="background-image:url(<?= asset.'/img/6.jpg';?>);"></li>
                <li class="full" style="background-image:url(<?= asset.'/img/1.jpg';?>);"></li>
                <li class="full" style="background-image:url(<?= asset.'/img/2.jpg';?>);"></li>
                <li class="full" style="background-image:url(<?= asset.'/img/3.jpg';?>);"></li>
            </ul> <!-- /gellery -->

        	<h2>Mayor Key or the pathway to success</h2>

            <p>The key is to drink coconut, fresh coconut, trust me. Look at the sunset, life is amazing, life is beautiful, life is what you make it. Eliptical talk. I’m giving you cloth talk, cloth. Special cloth alert, cut from a special cloth. In life you have to take the trash out, if you have trash in your life, take it out, throw it away, get rid of it, major key. To succeed you must believe. When you believe, you will succeed.</p>

            <a href="#" class="menu-link">nuestra carta</a>
        </div> <!-- /text-container -->

        <ul id="gellery">
            <li class="full" style="background-image:url(<?= asset.'/img/5.jpg';?>);"></li>
            <li class="full" style="background-image:url(<?= asset.'/img/6.jpg';?>);"></li>
            <li class="full" style="background-image:url(<?= asset.'/img/1.jpg';?>);"></li>
            <li class="full" style="background-image:url(<?= asset.'/img/2.jpg';?>);"></li>
            <li class="full" style="background-image:url(<?= asset.'/img/3.jpg';?>);"></li>
        </ul> <!-- /gellery -->
    </div> <!-- /historia -->

    <div id="ubicacion">
    	<div id="map"></div> <!-- /map -->
        <div class="info-location">
        	<div class="address">
            	<p>Av. Veracruz 38,
                </br>Roma Nte. 06140
                </br>Ciudad de México, CDMX</p>
            </div> <!-- /address -->

            <div class="reservations">
            	<p>Reservar por</p>
				<a href="#" target="_blank" class="link-opentable">OPEN TABLE</a>
                <p>Reserva telefónica:</p>
                <a href="tel:55534940" target="_blank" class="link-phone">5553 4940</a>
            </div> <!-- /reservations -->

            <a href="mailto:hola@vecchioforno.mx" class="link-mail">hola@vecchioforno.mx</a>
        </div> <!-- /info-location -->
    </div> <!-- /ubicacion -->

    <!--<div id="parallax" class="parallax-window" data-parallax="scroll" speed="0.4" bleed="-200" data-image-src="<?= asset.'/img/4.jpg'; ?>"></div> <!-- parrallax -->

    <section id="parallaxlike">

    </section>

    <div id="contacto">
    	<form id="contact-form">
        <div class="row">
          <div class="row">
            <div class="input-field col s6">
              <input id="name" type="text" required>
              <label for="name">Nombre<span class="required">*</span></label>
            </div>
            <div class="input-field col s6">
              <input id="phone" type="tel">
              <label for="phone">Teléfono</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="email" type="email" required>
              <label for="email">Correo Electrónico<span class="required">*</span></label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <textarea id="msg" class="materialize-textarea"></textarea>
              <label for="msg">Mensaje<span class="required">*</span></label>
            </div>
          </div>
          <div class="row-submit">
            <div class="col s6">

            </div>
            <div class="col s6">
              <button type="submit" class="submit-button">Contactar</button>
            </div>
          </div>
        </div>
      </form> <!-- /contact-form -->

        <div class="info-contact">
			<img src="<?= asset.'/img/logo-loader.svg';?>" alt="Vecchio Forno" class="logo-contact" />
            <p>Av. Veracruz 38,
            </br>Roma Nte. 06140
            </br>Ciudad de México, CDMX</p>
            <a href="mailto:hola@vecchioforno.mx" class="link-mail">hola@vecchioforno.mx</a>
            <a href="tel:55534940" target="_blank" class="link-phone">5553 4940</a>

            <div class="social-media">
                <a href="#" class="social-item twitter" target="_blank"></a>
                <a href="#" class="social-item facebook" target="_blank"></a>
                <a href="#" class="social-item instagram" target="_blank"></a>
            </div> <!-- /social-media -->
        </div> <!-- /info-contact -->

    </div> <!-- /contacto -->

    <div class="legales">
    	<small class="text-full">
        	<a href="#">Facturación</a>  | <a href="#">Reservaciones</a>
        </small> <!-- /text-full -->
        <small class="text-full">© Vecchio Forno 2017 CDMX<br /><a href="https://lunapunto.com" target="_blank">Made with love by Luna Punto | 07-17</a></small> <!-- /text-full -->
    </div> <!-- /legales -->
</div> <!-- /main-container -->

<script>
$('ul#slider').slick({
	autoplay: true,
	autoplaySpeed: 6000,
	slidesToShow: 1,
	slidesToScroll: 1,
	arrows: false,
	fade: true,
	pauseOnHover: false,
	speed: 1000,
	dots: false
});

$('ul#gellery, ul#gallery-movil').slick({
	autoplay: true,
	autoplaySpeed: 6000,
	slidesToShow: 1,
	slidesToScroll: 1,
	arrows: true,
	fade: true,
	pauseOnHover: false,
	speed: 1000,
	dots: false
});

function initMap() {
  var svg = '<?= trim(file_get_contents(asset.'/img/marker.svg'));?>';
  var svgicon = 'data:image/svg+xml;charset=UTF-8;base64,' + btoa(svg);
  console.log(svgicon);
	var info = {lat: 19.4187085, lng: -99.1751216};

	var map = new google.maps.Map(document.getElementById('map'), {
	  zoom: 17,
	  center: info,
	  styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}],
    scrollwheel: false,
	});

  var marker = new google.maps.Marker({
    position: info,
    map: map,
    draggable: false,
    icon: svgicon
  });

  }

$('.parallax-window').parallax({imageSrc: "<?= asset.'/img/4.jpg';?>"});
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBSY0pgRuH51aUhFJ4TUz0zqKH3b_OVV6Q&callback=initMap" async defer></script>
<?php get_footer($q);?>
