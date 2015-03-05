<?php if ( (!is_singular('reference')) && (!is_page_template('template-contact.php')) ): ?>

  <div id="cumoka" class="connect__cumo connect__cumo--nocolor">
    <div class="wrapper wrapper--wide">
      <div class="innerwrap">
        <div class="connect__left">
          <h3>Szeretjük amit csinálunk</h3>
          <p>Egyedi honlapot és/vagy karakteres arculatot szeretnél? Örömmel veszünk részt egyedi tervezési feladatokban.</p>
          <p><a class="readmore" href="<?php echo get_permalink(58); ?>">Lépj velünk kapcsolatba…</a></p>
        </div>

        <div class="connect__right">
          <ul class="connect__list">
            <li><i class="ion ion-iphone"></i><a href="tel:+36707705653">Hívd Mátyást +36 707705653</a></li>
            <li><i class="ion ion-email"></i><a href="mailto:office@hydrogene.hu">Küldj emailt office@hydrogene.hu</a></li>
            <li><i class="ion ion-ios-location"></i><a href="<?php echo get_permalink(58).'/#mapblock'; ?>">Ugorj be hozzánk egy kávéra</a></li>
            <li><i class="ion ion-compose"></i><a href="<?php echo get_permalink(58).'/#contactform'; ?>">Kérdezz ürlapunkon keresztül</a></li>
          </ul>
        </div>
      </div>

    </div>
  </div>
<?php endif; ?>

<footer class="content-info pagefooter <?php if ( is_singular('reference') || is_page(58) || is_page(69) ) { echo 'pagefooter--dark';};?>" role="contentinfo">
  <div class="wrapper wrapper--wide">
    <div class="innerwrap">
    	<div class="jobbfel">
    	<p class="pagefooter__helper">
        <a class="pagefooter__brand" href="<?php echo get_permalink(58); ?>">Hydrogene | honlap és arculat</a> 
        &copy; 2015 <a href="<?php echo get_permalink(58); ?>">Hydrogene Design</a> &middot; All rights is reserved <br> Handmade with Love in Budapest<br>
        <a class="szoci" href="https://www.facebook.com/hydrogenedesign" target="_blank">
            <i class="ion ion-social-facebook"></i>
          </a>
          <a class="szoci" href="https://www.twitter.com/hydrogenedesign" target="_blank">
            <i class="ion ion-social-twitter"></i>
          </a>
          <a class="szoci" href="tel:+36707705653" target="_blank">
            <i class="ion ion-android-call"></i>
          </a>	
  		</p>  		
    	</div>
      
    </div>  

  </div>
</footer>
