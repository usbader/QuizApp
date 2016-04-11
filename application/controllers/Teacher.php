<?php
include_once (dirname(__FILE__) . "/user.php");
class Teacher extends User {

  function __construct()
  {
    parent::__construct();
  }

  function index(){
  	// list all the courses a teacher have and instantiate courses objects 
  	// in the teacher class
  }

}
?>