<?php
	/**
	 * 
	 */
	class ExamInputController extends BaseController{
		
		public function inputGet(){
			$name = Input::get('name');
			return View::make('exam_input.inputGet')
					->with('name',$name);
		}
		public function inputAll()
		{
			$input = Input::all();
			return View::make('exam_input.inputAll')
					->with('input',$input);
		}
		public function inputOnly()
		{
			$input = Input::only('name');
			return View::make('exam_input.inputOnly')
					->with('input',$input);
		}
		public function inputExcept()
		{
			$input = Input::except('name');
			return View::make('exam_input.inputExcept')
					->with('input',$input);
		}
	}
	

?>