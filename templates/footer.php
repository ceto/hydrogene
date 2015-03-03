<?php if ( (!is_singular('reference')) && (!is_page_template('template-contact.php')) ): ?>

  <div id="cumoka" class="connect__cumo connect__cumo--nocolor">
    <div class="wrapper wrapper--wide">
      <div class="connect__left">
        <h3>Szeretjük amit csinálunk</h3>
        <p>Egyedi honlapot és/vagy karakteres arculatot szeretnél? Örömmel veszünk részt egyedi tervezési feladatokban.</p>
        <p><a href="<?php echo get_permalink(58); ?>">Lépj velünk kapcsolatba!</a></p>
      </div>

      <div class="connect__right">
        <ul class="connect__list">
          <li><i class="ion ion-iphone"></i><a href="tel:+36707705653">Hívd Mátyást +36 707705653</a></li>
          <li><i class="ion ion-email"></i><a href="mailto:office@hydrogene.hu">Küldj emailt office@hydrogene.hu</a></li>
          <li><i class="ion ion-ios-location"></i><a href="<?php echo get_permalink(58); ?>">Ugorj be hozzánk egy kávéra</a></li>
          <li><i class="ion ion-compose"></i><a href="<?php echo get_permalink(58); ?>">Kérdezz ürlapunkon keresztül</a></li>
        </ul>
      </div>

      <div class="connect__footer">
        <div class="fbal">
          <p class="doshare">Van egy jó projekted? Segítünk formába hozni.</p>
        </div>
        <div class="fjobb">
          <a href="<?php echo get_permalink(58); ?>" class="btn btn--contactstart">Kapcsolat felvétel</a>
        </div>
  
      </div>
    
    </div>
  </div>
<?php endif; ?>

<footer class="content-info pagefooter" role="contentinfo">
  <div class="wrapper wrapper--wide">
    <div class="innerwrap">
    	<div class="balfel">
    		<a class="pagefooter__brand" href="<?php echo esc_url(home_url('/')); ?>">Hydrogene</a>
    		<p class="pagefooter__slogan">
    			Honlap és arculat tervezés
    		</p>
    	</div>
      <div class="legszel">
          <a href="https://www.facebook.com/hydrogenedesign" target="_blank">
            <i class="ion-social-facebook"></i>
          </a>
          <a href="https://www.twitter.com/hydrogenedesign" target="_blank">
            <i class="ion-social-twitter"></i>
          </a>
      </div>
    	<div class="jobbfel">
    	<p class="pagefooter__helper">
        <!-- Küldj emailt <a href="mailto:office@hydrogene.hu">office@hydrogene.hu</a> &middot; Hívj telefonon <a href="tel:+36 70 770 5653">(0036) 70.770.5653</a><br> -->
        &copy; 2015 <a href="<?php echo esc_url(home_url('/')); ?>">Hydrogene Design</a> &middot; All rights is reserved  <br> Handmade with Love in Budapest
  	
  		</p>  		
    	</div>
      
    </div>  

  </div>
</footer>
