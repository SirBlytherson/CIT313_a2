<?php

abstract class Model {
	
	protected $userID = "blrbrown";
	protected $firstname = "Blythe";
	protected $lastname = "Brown";
	protected $email = "blythe.brown@sbcglobal.net";
	protected $role = "IT Overlord";
	
	public function __construct() {
		// null constructor
		// we will revisit this later
	}
	public function __get($field) {
		return self::$field;
	}
	public function __set($field, $value) {
		self::$field = $value;
	}
	public function __destruct() {
		// destructing
	}	
}
