<?php
/**
 * 
 */
class Category extends Eloquent {
	
	public $timestamps = false;
	
	public function book()
	{
		return $this->hasMany('Book');
		
	}
}




?>