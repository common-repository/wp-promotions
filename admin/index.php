<?php

function wpp_save_options() {

	if(isset( $_POST['promotions_nonce_field'] ) && wp_verify_nonce( $_POST['promotions_nonce_field'], 'promotions_nonce' ) && isset($_POST['submitted'])) {
		
		//store promoter role, used for determining which role can post promotions. By default admin always can!
		if(isset($_POST['promoter_role'])) {
			//promoter role option
			update_option('wpp_promoter_role', $_POST['promoter_role']);
		}

		//post type name
		if(isset($_POST['wpp_post_type'])) {
			update_option('wpp_post_type', $_POST['wpp_post_type']);
		}

	}

}