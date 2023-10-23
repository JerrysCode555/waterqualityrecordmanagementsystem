<?php

if( ! defined( 'ACCESS' ) ) die( 'DIRECT ACCESS NOT ALLOWED' );

function element( $el ) {	
	include SITE_URL . "/elements/$el.php";
}
function pages( $page ) {	
	include SITE_URL . "/pages/$page.php";
}

function set_message( $msg ) {
	$_SESSION[ 'MESSAGE' ] = $msg; 
}

function show_message() {
	echo "<div class='alert'>" . $_SESSION[ 'MESSAGE' ] . "</div>";	
	$_SESSION[ 'MESSAGE' ] = null;	
}


/* ADD YOUR CUSTOM FUNCTIONS IN custom_functions.php */
require 'custom-functions.php';

?>