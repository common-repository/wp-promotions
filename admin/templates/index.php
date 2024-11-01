<?php
	//functions/functions.php saves options in database
	wpp_save_options();
?>
<div class="wrap">
	<div class="more-options">
		Hi there, would you like to see more options? We're happy to look at incorporating any ideas you have please <a href="http://www.saowapan.com/contact">contact us!</a>
	</div>
	<form method="post">

		<fieldset>

			<label for="promoter_role"><?php _e('Choose promoter role type (e.g. allow subscribers to post promotions.)', 'wpp'); ?></label>

			<select name="promoter_role">

				<?php 

					$promoter_role = get_option('wpp_promoter_role');
					foreach (get_editable_roles() as $role) {
						$role_name = $role['name'];
						if ($role_name == $promoter_role) {
							echo '<option value="' . $role_name . '" selected>' . $role_name . '</option>';
						} else {
							echo '<option value="' . $role_name . '">' . $role_name . '</option>';
						}
					}
				?>

			</select>

		</fieldset>

<!-- 		<fieldset>

			<label for="max_promotions"><?php _e('Max number of promotions per user (min 1)', 'wpp'); ?></label>

			<?php $max_promotions = get_option('wpp_max_promotions');
				echo '<input type="number" min="1" value="' . $max_promotions . '">';
			?>

		</fieldset> -->

<!-- 		<fieldset>

			<label for="wpp_post_type"><?php _e('Post Type Name (leave blank for default)', 'wpp'); ?></label>

			<?php $post_type = get_option('wpp_post_type');
				if(empty($post_type)) {
					echo '<input name="wpp_post_type type="text" value="promotions">';
				} else {
					echo '<input name="wpp_post_type" type="text" value="' . $post_type . '">';
				}
			?>

		</fieldset> -->

		<?php if(isset( $_POST['promotions_nonce_field'] ) && wp_verify_nonce( $_POST['promotions_nonce_field'], 'promotions_nonce' ) && isset($_POST['submitted'])) { ?>
			<div class="success">
				<?php _e('Options successfully updated!', 'wpp'); ?>
			</div>
		<?php } ?>

		<fieldset>

			<?php wp_nonce_field('promotions_nonce', 'promotions_nonce_field'); ?>
			<input type="hidden" name="submitted" id="submitted" value="true" />
			<button type="submit"><?php _e('Update Options', 'wpp') ?></button>

		</fieldset>

	</form>

</div>