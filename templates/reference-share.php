<div class="shareblock__nav">
	<ul class="nav nav-tabs" role="tablist">
		<li role="presentation" class="active">
			<a href="#contactpanel" aria-controls="contactpanel" role="tab" data-toggle="tab">Lépj kapcsolatba velünk</a>
		</li>
		<li role="presentation" >
			<a href="#sharepanel" aria-controls="sharepanel" role="tab" data-toggle="tab">Fontos a véleményed</a>
		</li>

	</ul>
</div>
<div class="tab-content">

	<div role="tabpanel" class="tab-pane fade in active" id="contactpanel">
		<div class="refsingle__contactopener">
			<h3 class="blocktitle">Szeretnéd ha neked dolgoznánk?<small>Az együttműködés ajánlatkéréssel kezdődik.</small></h3>
			<a href="<?php echo get_permalink(58); ?>" class="btn btn--pseudo">Kapcsolat felvétel</a>
		</div>
	</div>

	<div role="tabpanel" class="tab-pane fade" id="sharepanel">
		<div class="refsingle__share">
		    <h3 class="blocktitle">Ha tetszik ez a munkánk<small>bökj egyet nekünk. Köszönjük.</small></h3>
				<ul class="uglybuttons">
					<li class="face">
						<div class="fb-like" data-colorscheme="dark" data-href="<?php the_permalink(); ?>" data-layout="button" data-action="like" data-show-faces="false" data-share="false"></div>
					</li>

					<li class="gplus">
						<div class="g-plusone" data-size="tall" data-annotation="none"></div>
					</li>
					<li class="twitter">
						  <a href="https://twitter.com/share" class="twitter-share-button" data-via="hydrogenedesign" data-count="none">Tweet</a>
					</li>

				</ul>
		</div>
	</div>

</div>