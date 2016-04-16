<?php

class Teacher extends User {

  function __construct()
  {
    parent::__construct();

   // we need to import the model so that we can call its function
    $this->load->model('Dataload');

  }

  function index(){
  //  this->viewCourse();
  redirect('teacher/viewCourse');
  }

  function viewCourse(){

    // this is how you can get session data, in this case teacher. I wanna use it to retrive
    // teacher courses

     $teacher_id    = $this->session->userdata('id');
     $teacher_username  = $this->session->userdata('username');

     $data['teacherCourses'] = $this->Dataload->viewCourseTeacher($teacherID);

     $this->load->view('teacher_view', $data);

  }


}
?>
