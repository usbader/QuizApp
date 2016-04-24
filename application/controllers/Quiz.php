<?php
	class Quiz extends CI_Controller{
		function __construct()
  		{
    		parent::__construct();
    		$this->load->model('dataload','',TRUE);
    		$this->load->library('question');
  		}
  		function attemptQuiz($quizID)
  		{
  			$data['questions'] = array();
  			$questionID = $this->dataload->getQuestionID($quizID);
  			foreach ($questionID as $q){
  				$question = $this->question->getQuestionStatement($q->questionID)[0];
  				array_push($data['questions'], $question);
  			}
  			$this->load->view('student_quiz_view', $data);

  		}
	}











?>
