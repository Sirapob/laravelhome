<?php
	
	/**
	 * 
	 */
	class ExamRequestController  extends BaseController {
		
		function url(){
			return View::make('exam_request.url');
		}
		function path(){
			return View::make('exam_request.path');
		}
		function segment(){
			return View::make('exam_request.segment');
		}
		function server(){
			return View::make('exam_request.server');
		}
	}
	


?>