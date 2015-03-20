
		<footer class="page-footer grey darken-4">
			<div class="container">
				<div class="row">
					<div class="col l4 s12">
						<p class="white-text">Designer, Web Designer, Bald</p>
					</div>
					<div class="col l4 offset-l4 s12">
						<p class="white-text">
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