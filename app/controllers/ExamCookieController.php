<?php
/**
 * 
 */
class ExamCookieController extends BaseController {
	
	public function cookieForever() {
		$cookie = Cookie::forever('myCookie','This is cookie.');
		$view = View::make('exam_cookie.cookieForever');
		return Response::make($view)->withCookie($cookie);
	}
}






?>