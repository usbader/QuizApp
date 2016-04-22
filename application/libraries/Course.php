<?php
class Course{
	public function __construct(){
	}
	public function getQuiz($cid)
	{
		$CI =& get_instance();
		$CI->load->model('Dataload');
		$Quizs = $CI->Dataload->getQuiz($cid);
		return $Quizs;
	
	}
}

?>