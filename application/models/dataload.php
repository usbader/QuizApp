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
    function courseInfo($course_id){
        $this -> db -> select('courseName, semester, courseID');
        $this -> db -> from('Course');
        $this -> db -> where('courseID', $course_id);
        $query = $this -> db -> get();
        return $query->result();
    }
    function viewCourseStudent($student_id){
        $this -> db -> select('courseID');
        $this -> db -> from('StudentCourseRegistry');
        $this -> db -> where('studentID', $student_id);
        $query = $this -> db -> get();
        return $query->result();
    }
    function viewCourseTeacher($teacher_id){
        $this -> db -> select('courseID, courseName, semester, teacherID');
        $this -> db -> from('course');
        $this -> db -> where('teacherID = ' . "'" . $teacher_id . "'");
        $query = $this -> db -> get();
     return $query->result();
    }
    function makeQuiz($title, $duration, $courseID ){
      $isPosted = false;
      $quizID = $this->db->count_all('Quiz') + 1;
      $this->db->query("INSERT INTO Quiz VALUES('$quizID', '$title','$isPosted','$duration','$courseID')");
    return $quizID;
    }
    function getQuiz($c_id){
        $this -> db -> select('quizID, quizName, Duration');
        $this -> db -> from('Quiz');
        $this -> db -> where('courseID', $c_id);
        $query = $this -> db -> get();
    return $query->result();
    }
    function getQuestionID($quiz_id){
        $this -> db -> select('questionID');
        $this -> db -> from('Question');
        $this -> db -> where('quizID', $quiz_id);
        $query = $this -> db -> get();
    return $query->result();
    }
    function getQuestionInfo($question_id){
        $this -> db -> select('questionStatement, questionType, option1, option2, option3, option4, option5');
        $this -> db -> from('Question');
        $this -> db -> where('questionID', $question_id);
        $query = $this -> db -> get();
    return $query->result();
    }
    public function addQuestion($statement, $questionType, $key, $option1, $option2, $option3, $option4, $option5, $quizID){
      $questionID = $this->db->count_all('Question') + 1;
      $studentAnswer= "empty";
      // not yet corrected
      $isCorrect=-1;
      $this->db->query("INSERT INTO Question VALUES('$questionID', '$statement','$key','$studentAnswer','$isCorrect','$questionType','$quizID','$option1','$option2','$option3','$option4','$option5')");
    }
}
?>
