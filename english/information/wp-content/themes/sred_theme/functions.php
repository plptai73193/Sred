<?php 
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'single-post-thumbnail', 600, 332 );

	remove_filter( 'the_content', 'wpautop' );
	remove_filter( 'the_excerpt', 'wpautop' );
	
	function test_func() {
		echo "anhnm";
	}
	add_shortcode('testshortcode', 'test_func');
	/**
	 * my_error_message
	 * @param string $error
	 * @param string $key
	 * @param string $rule（半角小文字）
	 */
	function my_error_message_contact( $error, $key, $rule ) {
		if ( $key === 'company-school-name' && $rule === 'noempty' ) {
	        return 'Required.';
	    }
	    if ( $key === 'your-name' && $rule === 'noempty' ) {
	        return 'Required.';
	    }
	    if ( $key === 'your-mail' && $rule === 'noempty' ) {
	        return 'Required.';
	    }
	    if ( $key === 'your-content' && $rule === 'noempty' ) {
	        return 'Required.';
	    }
	    if ( $key === 'your-phone' && $rule === 'tel' ) {
	        return 'It is not a telephone number format.';
	    }
	    return $error;
	}
	function my_error_message_compositerod( $error, $key, $rule ) {
		if ( $key === 'company-school-name' && $rule === 'noempty' ) {
	        return 'Required.';
	    }
	    if ( $key === 'your-name' && $rule === 'noempty' ) {
	        return 'Required.';
	    }
	    if ( $key === 'your-mail' && $rule === 'noempty' ) {
	        return 'Required.';
	    }
	    if ( $key === 'your-phone' && $rule === 'tel' ) {
	        return 'It is not a telephone number format.';
	    }
	    if ( $key === 'applicable_target' && $rule === 'noempty' ) {
	        return 'Required.';
	    }
	    return $error;
	}
	function my_error_message_product( $error, $key, $rule ) {
		if ( $key === 'company-school-name' && $rule === 'noempty' ) {
	        return 'Required.';
	    }
	    if ( $key === 'your-name' && $rule === 'noempty' ) {
	        return 'Required.';
	    }
	    if ( $key === 'your-mail' && $rule === 'noempty' ) {
	        return 'Required.';
	    }
	    if ( $key === 'your-phone' && $rule === 'tel' ) {
	        return 'It is not a telephone number format.';
	    }
	    if ( $key === 'applicable_target' && $rule === 'required' ) {
	        return 'Required.';
	    }
	    return $error;
	}
	function my_error_message_contact_product( $error, $key, $rule ) {
		if ( $key === 'company-school-name' && $rule === 'noempty' ) {
	        return 'Required.';
	    }
	    if ( $key === 'your-name' && $rule === 'noempty' ) {
	        return 'Required.';
	    }
	    if ( $key === 'your-mail' && $rule === 'noempty' ) {
	        return 'Required.';
	    }
	    if ( $key === 'your-phone' && $rule === 'tel' ) {
	        return 'It is not a telephone number format.';
	    }
	    if ( $key === 'your-content' && $rule === 'noempty' ) {
	        return 'Required.';
	    }
	    return $error;
	}
	add_filter( 'mwform_error_message_mw-wp-form-22', 'my_error_message_contact_product', 10, 3 );
	add_filter( 'mwform_error_message_mw-wp-form-19', 'my_error_message_product', 10, 3 );
	add_filter( 'mwform_error_message_mw-wp-form-12', 'my_error_message_compositerod', 10, 3 );
	add_filter( 'mwform_error_message_mw-wp-form-7', 'my_error_message_contact', 10, 3 );
  ?>