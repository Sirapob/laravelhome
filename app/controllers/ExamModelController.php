<?php
/**
 * 
 */
class ExamModelController extends BaseController {
	
	public function create() {
		$model = new Book;
		
		$categoryOptions = Category::lists('name','id');
		
			if(Input::all()){
				$model->category_id = Input::get('category_id');
				$model->name = Input::get('name');
				$model->price = Input::get('price');
				$model->created = date('Y-m-d H:i:s');
				
				if($model->save()){
					return "Save Success.";
					
				}
			}
			return View::make('exam_model.create')->with('model',$model)->with('categoryOptions',$categoryOptions);
	}
	public function read(){
		$model = Book::all();
		
		return View::make('exam_model.read')->with('model',$model);
	}
	public function update($id=null){
		$model = Book::find($id);
		
		$categorySelected = $model->category_id;
		
		$categoryOptions = Category::lists('name','id');
		
		if(Input::all()){
			$model->category_id = Input::get('category_id');
			$model->name = Input::get('name');
			$model->price = Input::get('price');
			if($model->save()){
				return Redirect::to('read');
			}
		}
		return View::make('exam_model.update')
			->with('model',$model)
			->with('categoryOptions',$categoryOptions)
			->with('categorySelected',$categorySelected);
	}
	public function delete($id){
		Book::destroy($id);
		return Redirect::to('read');
	}
	public function myPagination(){
		$model = Book::paginate(3);
		return View::make('exam_model.myPagination')
			->with('model',$model);
	}
}




?>