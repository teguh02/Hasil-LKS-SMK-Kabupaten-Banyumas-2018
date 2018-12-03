<?php 

namespace App\Controllers;
use App\Core\Controller,
App\Models\Admin;

class adminController extends Controller
{
	public function __construct(){
		$this->Admin=new Admin;
	}
	public function index(){
		$result=$this->Admin->gets();
		$this->loadTemplate('admin/index',array('result'=>$result));
	}
	public function galeri(){
		$result=$this->Admin->getgaleri();
		$this->loadTemplate('admin/galeri',array('result'=>$result));
	}
	public function pesan(){
		$this->loadTemplate('admin/pesan');
	}
	public function berita(){
		$result=$this->Admin->getberita();
		$this->loadTemplate('admin/berita',array('result'=>$result));
	}
	public function tambah(){
		$this->loadTemplate('admin/tambah_index');
	}
	public function tambahindex(){
		$destinasi=$_POST['destinasi'];
		$deskripsi=$_POST['deskripsi'];
		$gambar=$_FILES['toto']['name'];
		
		$result=$this->Admin->tambahindex($destinasi,$deskripsi,$gambar);
	}
	public function tambah1(){
		$this->loadTemplate('admin/tambahgaleri');
	}
	public function tambahgaleri(){
		$judul=$_POST['judul'];
		$gambar=$_FILES['toto']['name'];
		
		$result=$this->Admin->tambahgaleri($judul,$gambar);
	}
	public function edit($id){
		$result=$this->Admin->gets();
		$this->loadTemplate('admin/edit_index');
	}
	public function delete($sd,$id){
		$result=$this->Admin->delete($sd,$id);
	}
	public function deletegaler($sd,$id){
		$result=$this->Admin->deletegaler($sd,$id);
	}
}