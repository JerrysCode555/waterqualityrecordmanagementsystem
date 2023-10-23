<?php 
	
	error_reporting(E_ALL);
	session_start();
	date_default_timezone_set("Asia/Manila");
	
	define( 'ACCESS', true );		

     define( 'ROOT_DIR', realpath(dirname(__FILE__)) ); // absolute path of the directory	
	
	define( 'DIR', ( ( dirname( $_SERVER[ 'PHP_SELF' ] ) == "/" ) ? "" : dirname( $_SERVER['PHP_SELF']) ) ); // directory name

     define( 'SITE_URL', ( isset($_SERVER['HTTPS']) ? $_SERVER['HTTPS'] : "http://") . $_SERVER['SERVER_NAME'] . ( isset( $_SERVER[ 'SERVER_PORT' ] ) ? ":" . $_SERVER[ 'SERVER_PORT' ] : "") . DIR ); // absolute URL of the site


     // C:\laragon\www\waterqualityrecordmanagementsystem
     // echo ROOT_DIR; 

     // /waterqualityrecordmanagementsystem
     // echo DIR; 
     
     // http://localhost:80/waterqualityrecordmanagementsystem
     // echo SITE_URL; 
     
	require 'config.php';	
	require 'init.php';
	require 'functions.php';	
	require 'authentication.php';	
	require 'actions.php';			

     if( isset( $_GET[ 'page' ] ) && !empty( $_GET[ 'page' ] ) ) {
		if( file_exists( SITE_URL . '/pages/' . $_GET[ 'page' ] . ".php" ) ) {
			require SITE_URL . '/pages/' . $_GET[ 'page' ] . ".php";
		} else {
			require SITE_URL . '/pages/404.php';
		}
	} else {
		require SITE_URL . '/pages/home.php';
	}
