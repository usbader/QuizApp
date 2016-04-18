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
  	$student_username  = $this->session->userdata('logged_in')['userName'];
  	$courses = $this->dataload->viewCourseStudent($student_id);
  	// echo '<pre>'; print_r($courses);
  	// echo '<pre>'; print_r($this->session->all_userdata());exit;
  	//echo "<script type='text/javascript'>alert('".$student_id."');</script>;";
  	
  	$courseQuiz = new stdClass;
  	foreach($courses as $course)
  	{	
  		$courseQuiz->$course = array();
  		$cid = $course->CourseID;
  		//create a course object
  		$this->load->library('course',$cid);
  		//get the quiz with course object
  		$quizs = $this->course->getQuiz();
  		foreach($quizs as $quiz)
  		{
  			array_push($courseQuiz->$course, "$quiz");
  		}
  	}
  	$this->load->view('student_view', $courseQuiz);
  }

}
?>