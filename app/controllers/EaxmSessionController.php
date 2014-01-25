<?php

class ExamSessionController extends BaseController{
	
	public function sessionPut(){
		Session::put('myName','Hope');
		
		
		
		return View::make('exam_session.sessionPut');
	}
	public function sessionPush(){
		Session::push('myTime', date('H:i:s'));
		return View::make('exam_session.sessionPush');
	}
	public function sessionAll(){
		
		return View::make('exam_session.sessionAll');
	}
	public function sessionForget(){
		
		Session::forget('myName');
		return View::make('exam_session.sessionForget');
	}
	public function sessionFlush(){
		
		Session::flush();
		return View::make('exam_session.sessionFlush');
	}
}


?>