<?php
 /**
 * Initialization file (includes/initialize.php).
 * 
 * @author Intelligent Design (S�awomir Kaliszczak)
 * @copyright (c) 2012 Intelligent Design (S�awomir Kaliszczak)
 * @package Core
 */

	include 'includes/config.php';
	include 'includes/functions.php';

	// Initialize Autoloading
	spl_autoload_register('__autoload_classes'); 