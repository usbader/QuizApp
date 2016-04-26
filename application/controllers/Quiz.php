<?php
	class Quiz extends CI_Controller{
		function __construct()
  		{
    		parent::__construct();
    		$this->load->model('dataload','',TRUE);
    		$this->load->library('question');
        $this->load->helper('form');
  		}
      function index(){
        

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
      function editQuiz($quizID)
      {
        $data['quizID'] = $quizID;
        $data['questions'] = array();
        $questionID = $this->dataload->getQuestionID($quizID);
        foreach ($questionID as $q){
          $question = $this->question->getQuestionStatement($q->questionID)[0];
          array_push($data['questions'], $question);
        }
        $this->load->view('teacher_quiz_view', $data);
      }
      function addQuestion()
      {
            $quizID = $this->input->post('quizID');
            $statement = $this->input->post('statement');
            $questionType = $this->input->post('group1');
            $option1 = $this->input->post('option1');
            $option2 = $this->input->post('option2');
            $option3 = $this->input->post('option3');
            $option4 = $this->input->post('option4');
            $option5 = $this->input->post('option5');
            $key = $this->input->post('key');
            $this->dataload->addQuestion($statement, $questionType, $key, $option1, $option2, $option3, $option4, $option5, $quizID);
            redirect('quiz/editQuiz/'.$quizID);
      }
      
	}

?>
