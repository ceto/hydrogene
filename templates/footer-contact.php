<?php if (!is_singular('reference')): ?>
<section class="contactopener">
	<div class="wrapper wrapper--wide">
			<div class="contactintro">
				<div class="bal">
					<h3 class="blocktitle">Szeretnéd ha neked dolgoznánk?<small>Az együttműködés ajánlatkéréssel kezdődik.</small></h3>
				</div>
				<div class="jobb">
					<a href="#contactformwrap" aria-expanded="false" aria-controls="contactformwrap" data-toggle="collapse" class="btn btn--pseudo">Kapcsolat felvétel <i class="ion ion-chatboxes"></i></a>
				</div>
		</div>
	</div>
</section>
<?php endif; ?>

<footer class="footer--contactblock">
	<div class="wrapper wrapper--wide">
		<div id="contactformwrap" class="panel-collapse collapse" aria-labelledby="contactformwrap">
			<form id="contactform" class="contactform">
				<h3 class="blocktitle">Ajánlatkérés</h3>
				<p class="contacttext">Hívj telefonon (+36) 70 770 5653, vagy kérj ajánlatot az alábbi űrlap kitöltésével. Két munkanapon belül válaszolunk.</p>

				<div class="formbal">
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
				</div>
				<div class="formjobb">
					<div class="formitem">
						<label for="tmeassage">Telefon</label>
						<textarea name="message" id="message" placeholder="Feladat leírása">Bele van már írva, így néz ki a bötű</textarea>
					</div>
				</div>
				<div class="formitem formitem--actions">
					<input type="submit" class="btn btn--pseudo" value="Ajánlatot kérek">
				</div>
			</form>
		</div>

	</div>
</footer>