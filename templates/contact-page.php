
<?php
	global $response;
  $response = '';

  function gen_response($type, $uzi){
    if($type == 'success') {
      return $response = '<p class="success">'.$uzi.'</p>';
    } else {
      return $response = '<p class="error">'.$uzi.'</p>';
    }
  }
  $not_human       = 'Authentication failed';
  $missing_content = 'A csillaggal jelölt mezők kitöltése kötelező.';
  $email_invalid   = 'Érvénytelen e-mail cím';
  $message_unsent  = 'Hiba a küldéskor. Próbáld meg telefonon. Vagy küldj e-mailt.';
  $message_sent    = '<strong>Köszönjük.</strong><br>Pár napon belül jelentkezünk.';
  $contact_name = isset($_POST['contact_name'])?$_POST['contact_name']:'';
  $contact_email = isset($_POST['contact_email'])?$_POST['contact_email']:'';
  $contact_tel = isset($_POST['contact_tel'])?$_POST['contact_tel']:'';
  $contact_message = isset($_POST['contact_message'])?$_POST['contact_message']:'';
  $contact_human = isset($_POST['contact_human'])?$_POST['contact_human']:'';
  
  $to = 'office@hydrogene.hu';
  $subject = "Hydrogene Web Kapcsolat";
  
  $headers = "From: " . strip_tags($contact_email) . "\r\n";
  $headers .= "Reply-To: ". strip_tags($contact_email) . "\r\n";
  //$headers .= "CC: szabogabi@gmail.com\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
  
if(!$contact_human == 0){
    if($contact_human != 2) gen_response('error', $not_human);
    else {
      
      //validate email
      if(!filter_var($contact_email, FILTER_VALIDATE_EMAIL))
        $response = gen_response('error', $email_invalid);
      else 
      {
        if(empty($contact_name) || empty($contact_message) || empty($contact_tel)){
          $response = gen_response('error', $missing_content);
        }
        else //ready to go!
        {
          $contact_message='Név: '.$contact_name.'<br/>'.'Tel: '.$contact_tel.'<br />'.'Üzenet: <br />'.$contact_message.'<br>---<br>'.$message_sent;
          $sent = wp_mail($to, $subject, $contact_message, $headers);
            if($sent) {
              $sent = wp_mail($contact_email, $subject, $contact_message, $headers);
              $response = gen_response('success', $message_sent);
            } else {
                $response = gen_response('error', $message_unsent);
              }
        }
      }
    }
  } 
  else 
    if (isset($_POST['submitted']) && $_POST['submitted']) { $response = gen_response('error', $missing_content);}
?>
<header class="contact__hero hero">
	<div class="wrapper wrapper--wide">
		<div class="hero__textblock">
		  <h1 class="hero__title fadeInUp animated">Nálad a labda</h1>
		  <h2 class="hero__subtitle fadeInUp animated">Beszélgessünk</h2>
		  <p class="hero__disclaimer fadeInUp animated">
		  	Örömmel veszünk részt egyedi tervezési feladatokban, történjen az webre/mobilra vagy klasszikus offline arculathordozókra. Legyen ez egy hosszan tartó, eredményes barátság kezdete.
		  </p>
		</div>
	</div>
</header>
<?php if ($response!='') : ?>
	<div id="contacresponse" class="contact-response">
		<div class="wrapper wrapper--wide">
			<?php echo $response; ?>
		</div>
	</div>
<?php endif; ?>
<section id="contactblock" class="contactblock">
	<div class="wrapper wrapper--wide fadeInUp animated">
	<div class="contactblock__inner">
		<div class="contactdata">
			<h3 class="contact__title">Elérhetőségek</h3>
			<p class="contactelement__data">Ha komoly az ügy és biztosra mész, telefonon vedd fel velünk kapcsolatot.</p>
			<div class="contactelement">
				<h4 class="contactelement__title"><a href="tel:+36309768698">(0036) 30.976.8698</a></h4>
				<p class="contactelement__data">Nem szeretünk korán kelni. Csörgess hétköznapokon 10 és 18 óra között.</p>
			</div>
			<div class="contactelement">
				<h4 class="contactelement__title">Írj emailt</h4>
				<p class="contactelement__data">
					<a href="mailto:office@hydrogene.hu"><i class="icon icon--email"></i>office@hydrogene.hu</a>
				</p>
			</div>
			<div class="contactelement">
				<h4 class="contactelement__title">Kövess minket</h4>
				<p class="contactelement__data">
					<a href="https://www.facebook.com/hydrogenedesign" target="_blank"><i class="icon icon--facebook"></i>fb.me/hydrogenedesign</a>
				</p>
				<p class="contactelement__data">
					<a href="https://twitter.com/hydrogenedesign" target="_blank"><i class="icon icon--twitter"></i>@hydrogenedesign</a>
				</p>
				
			</div>
		</div>
		
		<div class="contactformwrap" aria-labelledby="contactformwrap">
			<form id="contactform" class="contactform" action="<?php the_permalink(); ?>#contacresponse" method="post">
				<h3 class="contact__title">Küldj üzenetet</h3>
				<p class="contactelement__data">Érdeklődhetsz az alábbi űrlap kitöltésével is. Két munkanapon belül válaszolunk.</p>
				<div class="formitem">
					<label for="contact_name">Név*</label>
					<input type="text" name="contact_name" id="contact_name" required="required" placeholder="Add meg a nevedet*">
				</div>
				<div class="formitem">
					<label for="contact_email">Email*</label>
					<input type="text" name="contact_email" id="contact_email" required="required" placeholder="E-mail címedet*">
				</div>
				<div class="formitem">
					<label for="contact_tel">Telefon*</label>
					<input type="text" name="contact_tel" id="contact_tel" required="required" placeholder="Telefonszámot*">
				</div>

				<div class="formitem">
					<label for="contact_message">Milyen ügyben keresel?</label>
					<textarea name="contact_message" id="contact_message" placeholder="Milyen ügyben keresel?"></textarea>
				</div>
				<div class="formitem formitem--actions">
					<input type="hidden" name="contact_human" value="2">
        	<input type="hidden" name="submitted" value="1">
					<input type="submit" class="btn btn--dark" value="Elküldöm az üzenetet">
				</div>
			</form>
		</div>
	</div><!-- /.contactblock__inner -->
	</div>
</section>

<section id="mapblock" class="mapblock">	
	<div class="mapblock__content">
		<div class="wrapper wrapper--normal">
			<a href="#" class="mapinfo__close"><i class="icon ion--close"></i></a>
			<div class="balfel">
				<h2 class="contact__title">Személyesen*</h2>
				<p class="contactelement__data">Együtt gondolkodni jó. Gyakori vendégünk leszel, ha beindul a projekted.<br>
				<small>*Időpont egyeztetés szükséges.</small></p>
			</div>
			<div class="jobbfel">
				<div class="contactelement">
					<h4 class="contactelement__title"><!-- <i class="icon icon--location"></i> -->Hydrogene Design</h4>
					<p class="contactelement__data behuz">BZS 50 műterem<br>
					Bajcsy-Zsilinszky út 50.<br>
					1054 Budapest</p>
					<p class="contactelement__data behuz"><small>20-as kapucsengő</small></p>
				</div>
			</div>
		</div>
	</div>

	<div class="map-overlay"></div>

	<div class="wrapper wrapper-fullwidth">
		<div id="map-canvas"></div>
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
    var myLatLng = new google.maps.LatLng(47.505175, 19.054692);
    var officeMarker = new google.maps.Marker({
      position: myLatLng,
      map: map,
      icon: image,
      animation: google.maps.Animation.DROP,
    });
    officeMarker.setAnimation(google.maps.Animation.BOUNCE);

    google.maps.event.addListener(officeMarker, 'click', function() {
	    officeMarker.setAnimation(null);
    	$('.mapblock__content').addClass('is_show');
    	$('.map-overlay').addClass('is_show');
  	});
  }

  google.maps.event.addDomListener(window, 'load', initialize);

</script>
