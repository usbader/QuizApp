<?php
Class Dataload extends CI_Model
{
    function login_db($type, $username, $password)
    {
        $this -> db -> select('userID, userName, password, type');
        $this -> db -> from('user');
        $this -> db -> where('type', $type);
        $this -> db -> where('userName', $username);
        $this -> db -> where('password', $password);
        $this -> db -> limit(1);
        $query = $this -> db -> get();



        if($query -> num_rows() == 1)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
    }
    function viewCourseTeacher($teacher_id){
        $this -> db -> select('courseID, courseName, semester, teacherID');
        $this -> db -> from('course');
        $this -> db -> where('teacherID = ' . "'" . $teacher_id . "'");
        $query = $this -> db -> get();
     return $query->result();
    }
}
?>
