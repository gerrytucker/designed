
		<footer class="page-footer">
			<div class="container">
				<div class="row">
					<div class="col l4 s12">
						<p>Designer, Web Designer, Bald</p>
					</div>
					<div class="col l4 s12">
					</div>
					<div class="col l4 s12">
						<?php
						$email = "designed@markwalling.co.uk";
						if(function_exists('eos_obfuscate')) {
							echo eos_obfuscate(array('email' => $email, 'link_title' => 'designed@markwalling.co.uk'));
						} else {
							echo $email;
						}
						?>
					</div>
				</div>
			</div>
		</footer>

		<?php wp_footer(); ?>
  </body>
</html>