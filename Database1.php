<?php 

	class Database1{
		var $host = "localhost";
		var $uname = "root";
		var $pass = "";
		var $db = "sregepngoding";
		var $con;

		function __construct(){
			$this->con = mysqli_connect($this->host,$this->uname,$this->pass,$this->db);

			//check connect
			if (mysqli_connect_errno()){
				echo "failed to connect to MySQL: " . mysqli_connect_error();
			}else
				echo "koneksi berhasil";
		}
	    function tampil_data(){
        	$data = mysqli_query($this->con,"select * from user");
        	while($d = mysqli_fetch_array($data)){
            	$hasil[] = $d;
        	}
        return $hasil;
    	}

    	function input($nama,$alamat,$usia){
        	mysqli_query("insert into user values('','$nama','$alamat','$usia')");
    	}   
	}
	$db = new Database1;
 ?>