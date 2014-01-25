<?php
	/**
	 * 
	 */
	class Book extends Eloquent {
		
		public $timestamps = false;
		
		public function category(){
		
		return $this->belongsTo('Category');
	}
}
	
	


?>