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
    function viewCourseStudent($student_id){
        $this -> db -> select('courseID, semester');
        $this -> db -> from('StudentCourseRegistry');
        $this -> db -> where('studentID', $student_id);
        $query = $this -> db ->get();
        return $query->result();
    }
    function viewCourseTeacher($teacher_id){
        $this -> db -> select('courseID, courseName, semester, teacherID');
        $this -> db -> from('course');
        $this -> db -> where('teacherID = ' . "'" . $teacher_id . "'");
        $query = $this -> db -> get();
     return $query->result();
    }
    function getQuiz($cid){
        $this -> db -> select('quizID, quizName, beginTime, endTime');
        $this -> db -> from('Quiz');
        $this -> db -> where('courseID', $cid);
        $query = $this -> db -> get();
    return $query->result();
    }
}
?>
