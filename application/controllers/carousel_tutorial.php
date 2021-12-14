<?php
/**
 * Author: Jomar Oliver Reyes
 * Author URL: https://www.jomaroliverreyes.com
*/

// Carousel_tutorial controller class loads the carousel_tutorial view page
class Carousel_tutorial extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		//loads carousel_tutorial
		$this->load->view('carousel_tutorial');
	}
}
?>