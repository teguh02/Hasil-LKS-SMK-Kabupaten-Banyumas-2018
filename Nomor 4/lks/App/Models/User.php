<?php 

namespace App\Models;

use App\Core\Model;

class User extends Model{
	public function get4(){
		$sql="SELECT * FROM destinasi LIMIT 4	";
		$result=$this->db->query($sql);
		return $result;
	}
	public function getgaleri(){
		$sql="SELECT * FROM galeri	";
		$result=$this->db->query($sql);
		return $result;
	}
	public function getdestinasi(){
		$sql="SELECT * FROM destinasi	";
		$result=$this->db->query($sql);
		return $result;
	}
	public function deskripsi($sd,$id){
		$sql="SELECT * FROM destinasi WHERE id=$id";
		$result=$this->db->query($sql);
		return $result;
	}
}
