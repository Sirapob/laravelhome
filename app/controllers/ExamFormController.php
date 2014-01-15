<?php
class ExamFormController extends BaseController{
	public function myFilefield()
	{
		return View::make('exam_form.myFilefield');
	}
	public function myDDL()
	{
		$options = array('key1'=>'option1','key2'=>'option2','key3'=>'option3');
		return View::make('exam_form.myDDL')
				->with('options',$options);
	}
	public function myButton()
	{
		return View::make('exam_form.myButton');
	}
	public function path()
	{
		return View::make('exam_form.path');
	}
}



?>