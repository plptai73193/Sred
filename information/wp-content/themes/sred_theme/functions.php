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
	function my_error_message( $error, $key, $rule ) {
		if ( $key === 'contact-type' && $rule === 'noempty' ) {
	        return 'ご連絡内容を選んでください。';
	    }
	    if ( $key === 'company-name' && $rule === 'noempty' ) {
	        return '会社名を入力してください。';
	    }
	    if ( $key === 'your-name' && $rule === 'noempty' ) {
	        return 'お名前を入力してください。';
	    }
	    if ( $key === 'email-address' && $rule === 'noempty' ) {
	        return 'メールアドレスを入力してください。';
	    }
	    if ( $key === 'telephone' && $rule === 'noempty' ) {
	        return '電話番号を入力してください。';
	    }
	    if ( $key === 'contact-mess' && $rule === 'noempty' ) {
	        return 'お問い合わせ内容を入力してください。';
	    }
	    return $error;
	}
	function my_error_message_document( $error, $key, $rule ) {
	    if ( $key === 'company-name' && $rule === 'noempty' ) {
	        return '会社名を入力してください。';
	    }
	    if ( $key === 'your-name' && $rule === 'noempty' ) {
	        return 'お名前を入力してください。';
	    }
	    if ( $key === 'email-address' && $rule === 'noempty' ) {
	        return 'メールアドレスを入力してください。';
	    }
	    if ( $key === 'telephone' && $rule === 'noempty' ) {
	        return '電話番号を入力してください。';
	    }
	    return $error;
	}
	function my_error_message_simulator( $error, $key, $rule ) {
	    if ( $key === 'company-name' && $rule === 'noempty' ) {
	        return '会社名を入力してください。';
	    }
	    if ( $key === 'your-name' && $rule === 'noempty' ) {
	        return 'お名前を入力してください。';
	    }
	    if ( $key === 'email-address' && $rule === 'noempty' ) {
	        return 'メールアドレスを入力してください。';
	    }
	    if ( $key === 'telephone' && $rule === 'noempty' ) {
	        return '電話番号を入力してください。';
	    }
	    return $error;
	}
	add_filter( 'mwform_error_message_mw-wp-form-26', 'my_error_message', 10, 3 );
	add_filter( 'mwform_error_message_mw-wp-form-38', 'my_error_message_simulator', 10, 3 );
	add_filter( 'mwform_error_message_mw-wp-form-35', 'my_error_message_document', 10, 3 );
  ?>