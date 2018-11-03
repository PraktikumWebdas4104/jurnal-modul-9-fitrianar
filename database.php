<?php 

class database{

	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "database"; //isi sesuai nama database anda
	var $conn ;

	function __construct(){
		$this->conn = mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
		//buatlah koneksi secara OOP

		if ($this->conn){
			echo "Koneksi database berhasil";
		}else{
			echo "Koneksi database gagal";
		}	
	}

	function tampil_data(){
		$data = mysqli_query($this->conn, "SELECT * FROM tabel_user");//lengkapilah method tampil data
		//query select user

		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}

	function input($nama,$alamat,$usia){
		$data = mysqli_query($this->conn, "INSERT INTO tabel_user(nama, alamat, usia) VALUES ('$nama', '$alamat', '$usia')");//buatlah method input
		//query inset into user
	}

	function hapus($id){
		$data = mysqli_query($this->conn, "DELETE FROM tabel_user where id='$id'");//buatlah method hapus
		//query delete from id where id ='$id'
	}

	function edit($id){
		//lengkapilah method edit
		//query select from user where id ='$id'
		$data = mysqli_query($this->conn, "SELECT * FROM tabel_user WHERE id='$id'");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}

	function update($id,$nama,$alamat,$usia){
		//buatlah method update
		//query update user set blablabla where id='$id'
		mysqli_query($this->conn, "UPDATE tabel_user SET nama='$nama', alamat='$alamat', usia='$usia'");
	}

} 

?>