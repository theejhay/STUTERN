<?php
//HTML 5 LocalStorage
/*
Author: OGUNYEMI TAIWO JOHN

*/

	
class process{

	var $db_host="localhost";
	var $db_name="";
	var $db_user="root";
	var $db_pass="";

	//connecting to the database using pdo
	public function __construct(){
		$db = new pdo("mysql:host=$this->dbhost;dbname=$this->db_name","$this->db_user","$this->db_pass");
		return $db;
	}
	
	public function Save_To_Database(){
		//if the submit button has been clicked
		if(isset($_POST["done"]))
		{
			$email = $_POST["email"];
			// inserting into d db
			$qu = "INSERT INTO table (email) VALUES('".$email."')";
			$ins = $this->db->exec($qu);
			if($ins){
				return "Success!";
			}
			else{
				return "Fail!";
			}
		}
	}

	public function Save_To_Local_Storage(){

		return '<script type="text/javascript">
	//HTML5 Local storage
		var email = document.getElementById("email").value;
		if(typeof(Storage) !== "undefined") {
    // To store form input
	localStorage.setItem("Email", email);
	
// To Retrieve
	//Retrieve the form input into id: Result
	document.getElementById("result").innerHTML = localStorage.setItem("Email");
	} else {
		//If the browser does not support LocalStorage
   	document.getElementById("result").innerHTML = "No support";
		}

	</script>';
	}

	public function is_connected(){
		$port = "";//80 or 8080
		$connected = @fsockopen("http://www.domainname.com",$port);
		return $connected;

	}
}
//instantiating method
$output = new process;

//Deciding where to store input
if($output->is_connected()){
	$go = $output->Save_To_Database();
	echo $go;
}
else{
	$local = $output->Save_To_Local_Storage();
	echo $local;
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>A simple form</title>
	
</head>
<body>
<!-- our result goes here -->
<div id="result"></div>
<!-- A simple form with Email -->
<form action="" method="POST">
Email Address : <input type="email" id="email" placeholder="example@taiwo.com" name="email"  /> 
<br/>
<input type="submit" value="Submit" name="done">
</form>
</body>
</html>