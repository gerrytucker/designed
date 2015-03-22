
		<section class="social grey lighten-5">
			<div class="container">
				<div class="row hide-on-small-only">
					<div class="col m2 center-align">
						<a href="#"><span class="grey-text darken-4 icomoon-twitter"></span></a>
					</div>
					<div class="col m2 center-align">
						<a href="#"><span class="grey-text darken-4 icomoon-facebook"></span></a>
					</div>
					<div class="col m2 center-align">
						<a href="#"><span class="grey-text darken-4 icomoon-google-plus"></span></a>
					</div>
					<div class="col m2 center-align">
						<a href="#"><span class="grey-text darken-4 icomoon-instagram"></span></a>
					</div>
					<div class="col m2 center-align">
						<a href="#"><span class="grey-text darken-4 icomoon-pinterest"></span></a>
					</div>
					<div class="col m2 center-align">
						<a href="#"><span class="grey-text darken-4 icomoon-youtube"></span></a>
					</div>
				</div>
				<div class="row hide-on-med-and-up">
					<div class="col s4 center-align">
						<a href="#"><span class="grey-text darken-4 icomoon-twitter"></span></a>
					</div>
					<div class="col s4 center-align">
						<a href="#"><span class="grey-text darken-4 icomoon-facebook"></span></a>
					</div>
					<div class="col s4 center-align">
						<a href="#"><span class="grey-text darken-4 icomoon-google-plus"></span></a>
					</div>
				</div>
				<div class="row hide-on-med-and-up">
					<div class="col s4 center-align">
						<a href="#"><span class="grey-text darken-4 icomoon-instagram"></span></a>
					</div>
					<div class="col s4 center-align">
						<a href="#"><span class="grey-text darken-4 icomoon-pinterest"></span></a>
					</div>
					<div class="col s4 center-align">
						<a href="#"><span class="grey-text darken-4 icomoon-youtube"></span></a>
					</div>
				</div>
			</div>
		</section>

		<footer class="page-footer grey darken-4">
			<div class="container">
				<div class="row">
					<div class="col m4 s12 center-align">
						<p class="white-text">A Balding Designer</p>
					</div>
					<div class="col m4 offset-m4 s12 center-align">
						<p>
						<?php
						$email = "designed@markwalling.co.uk";
						if(function_exists('eos_obfuscate')) {
							echo eos_obfuscate(array('email' => $email, 'link_title' => 'designed@markwalling.co.uk'));
						} else {
							echo $email;
						}
						?>
						</p>
					</div>
				</div>
			</div>
		</footer>

		<?php wp_footer(); ?>
  </body>
</html>