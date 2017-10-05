<?php

class Controller {
	
	public $load;
	public $user;
	
	function __construct() {
		$this->load = new Load();
		$this->user = new User();
		$this->home();
	}
	function home() {
		$data = $this->user->getName();
		$this->load->view('view.php', $data);
	}

	public function __get($variablename)
	{
		return $this->$variablename;
	}
		
	public function __set($variablename, $variablevalue)
	{
		$this->$variablename = $variablevalue;
	}
		
	public function __destruct() {
		// destructing
	}	
}