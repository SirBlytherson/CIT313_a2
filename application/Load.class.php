<?php

class Load {
	
	public function __construct() {
		// null constructor
	}
	
	public function view($file_name, $data=null) {
		if(is_array($data)) {
			extract($data);
		}
		include 'views/'.$file_name;
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