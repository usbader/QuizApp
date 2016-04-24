<?php
include_once (dirname(__FILE__) . "/user.php");
class Student extends User {

  function __construct()
  {
    parent::__construct();
    $this->load->model('Dataload');
  }
  function index(){

  	redirect('student/viewCourse');
  }

  function viewCourse()
  {
  	$student_id = $this->session->userdata('logged_in')['id'];
  	$data['student_username'] = $this->session->userdata('logged_in')['userName'];
  	$courses = $this->dataload->viewCourseStudent($student_id);
    // echo '<pre>'; print_r($courses);
    $data['courses'] = array();
    foreach($courses as $c){
        $course = $this->dataload->courseInfo($c->courseID)[0];
        array_push($data['courses'],$course);
    }
    //echo '<pre>'; print_r($data['courses']);exit;
    //echo '<pre>'; print_r($data['courses'][0]);
  	// echo '<pre>'; print_r($this->session->all_userdata());exit;
  	//echo "<script type='text/javascript'>alert('".$student_id."');</script>;";
  	
  	$data['courseQuiz'] = array();
    //instantiate a course object
    $this->load->library('course');
  	foreach($data['courses'] as $c)
  	{	
  		$data['courseQuiz'][$c->courseID] = array();
  		$cid = $c->courseID;
  		//create a course object
  		//get the quiz with course object
  		$quizs = $this->course->getQuiz($cid);
      if ($quizs){
  		  foreach($quizs as $quiz)
  		  {
          // echo '<pre>'; print_r($quiz);exit;
  			 $data['courseQuiz'][$c->courseID][] = $quiz;
  		  }
      }
  	}
     // echo '<pre>'; print_r($data['courseQuiz']);exit;
  	$this->load->view('student_view', $data);
  }

}
?>