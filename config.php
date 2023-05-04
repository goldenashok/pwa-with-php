<?PHP
	if ($_SERVER['HTTP_HOST'] == 'localhost') {
		$host = "localhost";
		$dbusername="root";
		$dbpassword="";
		$dbname="pwa";	
	} else {	
		$host = "localhost";
		$dbusername="root";
		$dbpassword="";
		$dbname="pwa";
	}

	function connection() {	
		global $host,$dbusername,$dbpassword,$dbname;
		if (!($conn=mysqli_connect($host,$dbusername,$dbpassword))) {
			echo("error connecting to host");
			exit();
		}	

		// Select the Database

		if (!mysqli_select_db($conn,$dbname)) {
			echo("error in selecting the database");
			echo(sprintf("Error : %d %s",mysqli_errno($conn),mysqli_error($conn)));
		}	
		mysqli_set_charset($conn,'utf8');
		return $conn;

	}		

	$conn = connection();
	global $rootpath;
	error_reporting(1);
?>