<?php

class User extends Model {

	public function __construct() {
		// null constructor
	}

	public function __get($variablename)
	{
		return $this->$variablename;
	}
		
	public function __set($variablename, $variablevalue)
	{
		$this->$variablename = $variablevalue;
	}
	
	public function getName() {
		return array (
			'userID'=>$this->userID,
			'firstname'=>$this->firstname,
			'lastname'=>$this->lastname,
			'email'=>$this->email,
			'role'=>$this->role,
		);
	}
		
	public function __destruct() {
		// destructing
	}	

}

?>