<?php
	//function databaseConnect(){
		//ERROR REPORTING
		//error_reporting(E_ALL ^ E_DEPRECATED);
		
		//OLD METHOD TO CONNECT
		//$connection = mysql_connect("localhost","nickbagsz","Th3r3nc3n3w");
			//if(!$connection) {
				//die("Database Connection Failed" .mysql_error());
			//}

		//CONNECT
		$connection = mysqli_connect("localhost","root","", "samplecrud");
			if(mysqli_connect_errno()) {
				echo "Database Connection Failed" .mysqli_connect_errno();
			}
		
		//SELECT DB
		//$db_select = mysql_select_db("samplecrud");
			//if(!$db_select) {
				//die("Database Selection Failed" .mysql_error());
			//}
	//}

	//function databaseClose(){
		//mysqli_close();
	//}
?>