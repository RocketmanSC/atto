<?php
/**
 * News controller.
 * 
 * @author Intelligent Design (S�awomir Kaliszczak)
 * @copyright (c) 2012 Intelligent Design (S�awomir Kaliszczak)
 * @package Core
 */
class Home extends Controller{
	function index() { 

		return $this->view('index');
	}
}