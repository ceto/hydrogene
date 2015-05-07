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
            <li><i class="icon icon--iphone"></i><a href="tel:+36309768698">Hívd Mátyást (0036) 30.976.8698</a></li>
            <li><i class="icon icon--email"></i><a href="mailto:office@hydrogene.hu">Küldj emailt office@hydrogene.hu</a></li>
            <li><i class="icon icon--compose"></i><a href="<?php echo get_permalink(58); ?>">Kérdezz űrlapunkon keresztül</a></li>
            <li><i class="icon icon--facebook"></i><a href="https://www.facebook.com/hydrogenedesign" target="_blank">Megtalálsz minket a Facebookon</a></li>
          </ul>
        </div>
      </div>

    </div>
  </div>
<?php endif; ?>

<footer class="content-info pagefooter <?php if ( is_singular('reference') || is_page(array(58)) ) { echo 'pagefooter--dark';};?>" role="contentinfo">
  <div class="wrapper wrapper--wide">
    <div class="innerwrap">
    	<div class="jobbfel">
    	<p class="pagefooter__helper">
        <a class="pagefooter__brand" href="<?php echo get_permalink(58); ?>">Hydrogene | honlap és arculat</a> 
        &copy; 2015 <a href="<?php echo get_permalink(58); ?>">Hydrogene Design</a> &middot; All rights are reserved <br> Handmade with Love in Budapest<br>
        <a class="szoci" href="#top">
            <i class="icon icon--arrow-thin-up"></i>
        </a>
  		</p>  		
    	</div>
      
    </div>  

  </div>
</footer>
