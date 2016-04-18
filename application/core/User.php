<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->model('dataload','',TRUE);
    $this->data['message'] = '';
  }

  function index()
  {
    $this->load->helper('form');
    $this->load->view('home_view');
  }
  function login(){
    $this->form_validation->set_rules('type','Type','trim|required');
    $this->form_validation->set_rules('username', 'Username', 'trim|required');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');

    if($this->form_validation->run() == FALSE)
    {
      //Field validation failed.  User redirected to login page
      $this->load->view('home_view', $this->data);
    }
    else
    {
      $type = $this->input->post('type');
      $username = $this->input->post('username');
      $password = $this->input->post('password');

      $result = $this->dataload->login_db($type, $username, $password);
      if($result)
      {
        $sess_array = array();
        foreach($result as $row)
        {
          $sess_array = array(
            'id' => $row->userID,
            'userName' => $row->userName,
            'type' => $row->type
          );
          $this->session->set_userdata('logged_in', $sess_array);
        }

        // enter teacher class or student class to render student or teacher data.

        if($sess_array['type'] == 'teacher')
        {
          redirect('Teacher', 'refresh');
        }
        else{
          redirect('Student', 'refresh');
        }
      }
      else
      {
        // $this->form_validation->set_message('rule','Invalid username or password');
        $this->data['message'] = 'Invalid username or password';
        $this->load->view('home_view', $this->data);
      }
    }

  }
?>
