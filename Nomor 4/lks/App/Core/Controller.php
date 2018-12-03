<?php 

namespace App\Core;

class Controller{
	protected $data=[];

	public function __call($name,$argumnets){
		$this->loadTemplate('error_404',$this->data);
	}
	public function loadView($viewName,$viewData=array()){
		extract($viewData);
		include 'App/Views/' .$viewName .'.php';
	}
	public function loadTemplate($viewName,$viewData=array()){
		extract($viewData);
		include 'App/Views/template.php';
	}
	public function loadViewInTemplate($viewName,$viewData){
		extract($viewData);
		include 'App/Views/' .$viewName .'.php';

	}

}