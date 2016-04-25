<?php
	class Quiz extends CI_Controller{
		function __construct()
  		{
    		parent::__construct();
    		$this->load->model('dataload','',TRUE);
    		$this->load->library('question');
  		}
      function index(){
        $this->load->helper('form');

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
      function makeQuiz(){

            $quiz_title = $this->input->post('quiz_title');
            $duration = $this->input->post('duration');
            $statement = $this->input->post('statement');
            $questionType = $this->input->post('group1');
            $key = $this->input->post('key');
            $option1 = $this->input->post('option1');
            $option2 = $this->input->post('option2');
            $option3 = $this->input->post('option3');
            $option4 = $this->input->post('option4');
            $option5 = $this->input->post('option5');

            $courseID = $this->input->post('courseID');


            $quizID = $this->dataload->makeQuiz($quiz_title, $duration, $courseID);
            $this->dataload->addQuestion($statement, $questionType, $key, $option1, $option2, $option3, $option4, $option5, $quizID);

            redirect('teacher/viewCourse');
      }
	}











?>
