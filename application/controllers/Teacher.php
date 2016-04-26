<?php
include_once (dirname(__FILE__) . "/user.php");

class Teacher extends User {

  function __construct()
  {
    parent::__construct();

   // we need to import the model so that we can call its function
    $this->load->model('Dataload');

  }

  function index(){
  //  this->viewCourse();
  $this->load->helper('form');
  redirect('teacher/viewCourse');
  }
  function viewCourse(){

    // this is how you can get session data, in this case teacher. I wanna use it to retrive
    // teacher courses

     $data['teacher_id']    = $this->session->userdata('logged_in')['id'];

     $data['teacher_username']  = $this->session->userdata('logged_in')['userName'];

     $data['courses'] = $this->Dataload->viewCourseTeacher($data['teacher_id']);
     // usw courseID to get quiz Info
     $data['courseQuiz'] = array();
     // '<pre>'; print_r($data['courses']);
     foreach ($data['courses'] as $course) {
        $quizs = $this->Dataload->getQuiz($course->courseID);
        $data['courseQuiz'][$course->courseID] = $quizs;
     }
     //echo '<pre>'; print_r($data['courseQuiz']);
     $this->load->view('teacher_view', $data);

  }
  function makeQuiz(){

            $quiz_title = $this->input->post('quiz_title');
            $duration = $this->input->post('duration');
            $courseID = $this->input->post('courseID');
            $quizID = $this->dataload->makeQuiz($quiz_title, $duration, $courseID);
            //$this->dataload->addQuestion($statement, $questionType, $key, $option1, $option2, $option3, $option4, $option5, $quizID);

            redirect('teacher/viewCourse');
  }

}
?>
