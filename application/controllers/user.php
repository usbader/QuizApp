<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->model('dataload','',TRUE);
  }

  function index()
  {
    $this->load->helper('form');
    $this->load->view('login_view');
  }
  function login()
  {
  	//Field validation
    $this->form_validation->set_rules('username', 'Username', 'trim|required');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');
    if($this->form_validation->run() == FALSE)
    {
      //Field validation failed.  User redirected to login page
      $this->load->view('home_view');
    }
    // else
    // {
    //   $data = array(
    //     'username' => $this->input->post('username'),
    //     'password' => $this->input->post('password')
    //   );
    //   $result = $this->dataload->login_db($data);
    //   if($result)
    //   {
    //     $sess_array = array();
    //     foreach($result as $row)
    //     {
    //       $sess_array = array(
    //         'id' => $row->id,
    //         'username' => $row->username
    //       );
    //       $this->session->set_userdata('logged_in', $sess_array);
    //     }
    //     // enter teacher class or student class to render student or teacher data.
    //     return TRUE;
    //   }
    //   else
    //   {
    //     $this->form_validation->set_message('check_database', 'Invalid username or password');
    //     $this->load->view('login_view')
    //   }
    // }

  }
}

?>