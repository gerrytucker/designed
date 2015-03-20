
		<section class="social grey lighten-5">
			<div class="container">
				<div class="row">
					<div class="col l2">
						<a href="#"><span class="grey-text darken-4 icomoon-twitter"></span></a>
					</div>
					<div class="col l2">
						<a href="#"><span class="grey-text darken-4 icomoon-facebook"></span></a>
					</div>
					<div class="col l2">
						<a href="#"><span class="grey-text darken-4 icomoon-google-plus"></span></a>
					</div>
					<div class="col l2">
						<a href="#"><span class="grey-text darken-4 icomoon-instagram"></span></a>
					</div>
					<div class="col l2">
						<a href="#"><span class="grey-text darken-4 icomoon-pinterest"></span></a>
					</div>
					<div class="col l2">
						<a href="#"><span class="grey-text darken-4 icomoon-youtube"></span></a>
					</div>
				</div>
			</div>
		</section>

		<footer class="page-footer grey darken-4">
			<div class="container">
				<div class="row">
					<div class="col l4 s12">
						<p class="white-text">Designer, Web Designer, Bald</p>
					</div>
					<div class="col l4 offset-l4 s12">
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