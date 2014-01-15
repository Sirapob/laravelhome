<?php

class ExamSessionController extends BaseController{
	
	public function sessionPut(){
		Session::put('myName','Hope');
		return View::make('exam_session.sessionPut');
	}
}


?>