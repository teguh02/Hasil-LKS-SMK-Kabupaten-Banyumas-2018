<?php 

namespace App\Controllers;
use App\Core\Controller,
App\Models\User;

class indexController extends Controller
{
	public function __construct(){
		$this->User=new User;
	}
	public function index(){
		$result=$this->User->get4();
		$this->loadTemplate('index',array('result'=>$result));
	}
	public function galeri(){
		$result=$this->User->getgaleri();
		$this->loadTemplate('galeri',array('result'=>$result));
	}
	public function destinasi(){
		$result=$this->User->getdestinasi();
		$this->loadTemplate('destinasi',array('result'=>$result));
	}
	public function login(){
		$this->loadTemplate('login');
	}
	public function detail($sd,$id){
		$result=$this->User->deskripsi($sd,$id);
		$this->loadTemplate('detail',array('result'=>$result));
	}
}