<header class="contact__hero hero">
	<div class="wrapper wrapper--wide">
		<div class="hero__textblock">
		  <h1 class="hero__title">Nálad a labda</h1>
		  <h2 class="hero__subtitle">Beszélgessünk</h2>
		  <p class="hero__disclaimer">
		  	Örömmel veszünk részt egyedi tervezési feladatokban, történjen az webre/mobilra vagy klasszikus offline felületekre. Legyen ez egy hosszan tartó, eredményes barátság kezdete.
		  </p>
		</div>
	</div>
</header>


<section class="contactblock">
	<div class="wrapper wrapper--wide">
		<div class="contactdata">
			<h3 class="contact__title">Elérhetőségek</h3>
			<p class="contactelement__data">Ha komoly az ügy és biztosra mész, telefonon vedd fel velünk kapcsolatot.</p>
			<div class="contactelement">
				<h4 class="contactelement__title"><!-- <i class="ion ion-iphone"></i> --><a href="tel:+36 70 770 5653">(0036) 70.770.5653</a></h4>
				<p class="contactelement__data">Nem szeretünk korán kelni. Csörgess hétköznapokon 10 és 18 óra között.</p>
			</div>
			<div class="contactelement">
				<h4 class="contactelement__title">Írj emailt</h4>
				<p class="contactelement__data">
					<a href="mailto:office@hydrogene.hu"><i class="ion ion-email"></i>office@hydrogene.hu</a>
				</p>
			</div>
			<div class="contactelement">
				<h4 class="contactelement__title">Kövess minket</h4>
				<p class="contactelement__data">
					<a href="https://www.facebook.com/hydrogenedesign" target="_blank"><i class="ion ion-social-facebook"></i>fb.me/hydrogenedesign</a>
				</p>
				<p class="contactelement__data">
					<a href="https://twitter.com/hydrogenedesign" target="_blank"><i class="ion ion-social-twitter"></i>@hydrogenedesign</a>
				</p>
				
			</div>
		</div>
		
		<div class="contactformwrap" aria-labelledby="contactformwrap">
			<form id="contactform" class="contactform">
				<h3 class="contact__title">Küldj üzenetet</h3>
				<p class="contactelement__data">Érdeklődhetsz az alábbi űrlap kitöltésével is. Két munkanapon belül válaszolunk.</p>
					<div class="formitem">
						<label for="name">Név</label>
						<input type="text" name="name" id="name" required placeholder="Add meg a nevedet*">
					</div>
					<div class="formitem">
						<label for="email">Email</label>
						<input type="text" name="email" id="email" required placeholder="E-mail címedet*">
					</div>
					<div class="formitem">
						<label for="tel">Telefon</label>
						<input type="text" name="tel" id="tel" placeholder="Telefonszámot">
					</div>
		<!-- 			<div class="formitem">
						<label for="budget">Büdzsé</label>
						<input type="range" name="budget" id="range" placeholder="Mennyin szán a projektre">
					</div> -->

					<div class="formitem">
					<label for="tmeassage">Telefon</label>
					<textarea name="message" id="message" placeholder="Feladat leírása">Bele van már írva, így néz ki a bötű</textarea>
				</div>
				<div class="formitem formitem--actions">
					<input type="submit" class="btn btn--pseudo" value="Ajánlatot kérek">
				</div>
			</form>
		</div>
	</div>
</section>

<section id="mapblock" class="mapblock">
	<div class="wrapper wrapper-fullwidth">
		<div id="map-canvas"></div>
	</div>
	<div class="wrapper wrapper--normal">
		<div class="mapblock__content">
			
			<div class="balfel">
				<?php //the_content(); ?>
				<?php //wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
				<h2 class="contact__title">Személyesen*</h2>
				<p class="contactelement__data">Együtt gondolkodni jó. Gyakori vendégünk leszel, ha beindul a projekted.<br>
				<small>*Időpont egyeztetés szükséges.</small></p>
			</div>
			<div class="jobbfel">
				<div class="contactelement">
					<h4 class="contactelement__title"><!-- <i class="ion ion-location"></i> -->Hydrogene Design</h4>
					<p class="contactelement__data behuz">BZS 50 műterem<br>
					Bajcsy-Zsilinszky út 50.<br>
					1054 Budapest</p>
					<p class="contactelement__data behuz"><small>20-as kapucsengő</small></p>
				</div>
			</div>
		</div>
	</div>
</section>



<!-- Google MAps -->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
<script>

  function initialize() {

    var mapOptions = {
      center: new google.maps.LatLng(47.505175, 19.054692),
      zoom: 17,
      zoomControl: false,
      zoomControlOptions: {style: google.maps.ZoomControlStyle.DEFAULT,},
      disableDoubleClickZoom: true,
      mapTypeControl: true,
      mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,},
      scaleControl: true,
      scrollwheel: true,
      streetViewControl: true,
      draggable: true,
      overviewMapControl: true,
      overviewMapControlOptions: {opened: false,},
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      styles: [{featureType: "landscape",stylers: [{saturation: -100}, {lightness: 65}, {visibility: "on"}]}, {featureType: "poi",stylers: [{saturation: -100}, {lightness: 51}, {visibility: "simplified"}]}, {featureType: "road.highway",stylers: [{saturation: -100}, {visibility: "simplified"}]}, {featureType: "road.arterial",stylers: [{saturation: -100}, {lightness: 30}, {visibility: "on"}]}, {featureType: "road.local",stylers: [{saturation: -100}, {lightness: 40}, {visibility: "on"}]}, {featureType: "transit",stylers: [{saturation: -100}, {visibility: "simplified"}]}, {featureType: "administrative.province",stylers: [{visibility: "off"}]/** /},{featureType: "administrative.locality",stylers: [{ visibility: "off" }]},{featureType: "administrative.neighborhood",stylers: [{ visibility: "on" }]/**/}, {featureType: "water",elementType: "labels",stylers: [{visibility: "on"}, {lightness: -25}, {saturation: -100}]}, {featureType: "water",elementType: "geometry",stylers: [{hue: "#ffff00"}, {lightness: -25}, {saturation: -97}]}],
    }
    map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
    var image = '<?php echo get_stylesheet_directory_uri(); ?>/assets/img/flag.png';
    var myLatLng = new google.maps.LatLng(62.756715, 7.274334);
    var beachMarker = new google.maps.Marker({
      position: myLatLng,
      map: map,
      icon: image
    });
  }

  google.maps.event.addDomListener(window, 'load', initialize);

</script>
