<?php

class ExamSessionController extends BaseController{
	
	public function sessionPut(){
		Session::put('myName','Hope');
		
		
		
		return View::make('exam_session.sessionPut');
	}
	public function sessionPush(){
		Session::push('myTime', 'test');
		return View::make('exam_session.sessionPush');
	}
	public function sessionAll(){
		
		return View::make('exam_session.sessionAll');
	}
}


?>