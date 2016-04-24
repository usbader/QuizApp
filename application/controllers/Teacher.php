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

     $data['teacherCourses'] = $this->Dataload->viewCourseTeacher($data['teacher_id']);

     $this->load->view('teacher_view', $data);

  }

  function addQuestion(){

    $quiz_title = $this->input->post('quiz_title');
    echo "<script type='text/javascript'>alert('$quiz_title');</script>";

  }


}
?>
