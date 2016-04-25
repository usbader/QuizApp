<?php
class Question{
	public function getQuestionStatement($question_id)
	{
		$CI =& get_instance();
		$CI->load->model('Dataload');
		$Question = $CI->Dataload->getQuestionInfo($question_id);
		return $Question;

	}
}

?>
