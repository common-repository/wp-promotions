<?php
	//functions/functions.php saves options in database
	wpp_save_options();
?>
<div class="wrap">

	<form method="post">

		<fieldset>
		</fieldset>

		<fieldset>

			<?php wp_nonce_field('browser_nonce', 'browser_nonce_field'); ?>
			<input type="hidden" name="submitted" id="submitted" value="true" />
			<button type="submit"><?php _e('Update Cache', 'wpp') ?></button>

		</fieldset>

	</form>

</div>