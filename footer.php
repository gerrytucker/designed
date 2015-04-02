
		<footer class="page-footer grey darken-4">
			<div class="container">
				<div class="row">
					<div class="col s12 m6 center-align">
						<p><?php echo get_bloginfo('description'); ?></p>
					</div>
					<div class="col s12 m6 center-align">
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

	</div><!-- page-wrapper -->

		<?php wp_footer(); ?>
  </body>
</html>