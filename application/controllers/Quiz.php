<?php
	class Quiz extends CI_Controller{
		function __construct()
  		{
    		parent::__construct();
    		$this->load->model('dataload','',TRUE);
  		}
  		function index($quizID)
  		{
  			echo $quizID;
  		}
	}











?>