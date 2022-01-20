<?php

/**
 * @author Nazere Wright <nazwrightthedeveloper@gmail.com>
 * User Login Frontend Page
 */


//  if( is_user_logged_in() ){
//     //  should try to send the user to their account page if they try to login again.
//     wp_redirect( home_url('/') );
//  }

//  $login_errors = ( isset( $_GET['user-login'] ) ) ? $_GET["user-login"]  : 0;

//  if( $_POST['action'] === 'log-in' ){
//     //  submit the credentials entered]
//     $login = wp_login( $_POST["user-name"], $_POST['password'] );
//     $login = wp_signon( array(
//         'user_login' => $_POST['user-name'],
//         'user_password' => $_POST['password'],
//         'remember' => $_POST['remember-me'],
//     ), false );

//     // redirect on success
//     if( $login->ID ){
//         wp_redirect( home_url('dashboard') );
//     }
//  }
?>

<?php
//if ( ! is_user_logged_in() ) { // Display WordPress login form:
    $args = array(
        'redirect' => home_url( "dashboard-home" ), 
        'form_id' => 'loginform-custom',
        'label_username' => __( 'Username' ),
        'label_password' => __( 'Password' ),
        'label_remember' => __( 'Remember Me?' ),
        'label_log_in' => __( 'Log In' ),
        'remember' => true
    );
    wp_login_form( $args );
//} //else { // If logged in:
    // wp_loginout( home_url() ); // Display "Log Out" link.
    // echo " | ";
    // wp_register('', ''); // Display "Site Admin" link.
//}
?>


<div>
    <a href=""> Not a user? Sign Up here.</a>
</div>