
<?php
	//variables for the cal_days_in_monthdb connection 
	require("phpsqlsearch_dbinfo.php");
	
	/* data from the html page      //  table business structure
	$id = $_GET["id"]; 				//id_business` int(10) NOT NULL AUTO_INCREMENT,
	$name = $_GET[""]; 				//name` varchar(50) NOT NULL,
	$email = $_GET[""]; 			//email` varchar(50) NOT NULL,
	$passw = $_GET[""]; 			//password` varchar(100) NOT NULL,
	$id_type = $_GET["1"]; 			//id_business_type` int(10) NOT NULL,
	$id_plan = $_GET["1"]; 			//id_plan` int(11) NOT NULL,
	$phone = $_GET[""]; 			//phone` varchar(25) NOT NULL,
	$address = $_GET[""]; 			//address` varchar(250) NOT NULL,
	$eircode = $_GET[""]; 			//eircode` varchar(20) NOT NULL,
	$lat = $_GET["lat"]; 			//`latitude` decimal(10,8) DEFAULT NULL,
	$lat = $_GET["lng]; 			//longitude` decimal(10,8) DEFAULT NULL,
	$URL = $_GET["URL"]; 			//URL_profile_pic` varchar(250) DEFAULT NULL, */ 
	
	$connection=mysqli_connect ($servername, $username, $password); 
	if (!$connection) {
	  die("Not connected : " . mysqli_error());	}
	
	// Set the active mySQL database
	$db_selected = mysqli_select_db($connection, $database);
	if (!$db_selected) {
	die ("Can\'t use db : " . mysqli_error()); }
  
	// Creating the sql query  -- Invalid query: Unknown column 'id_business_type' in 'field list'
	$sql = "call sp_addnewbusiness('CCT College Dublin', 'info@cct.ie', 'CCT3034dub', '12', '1', '+353 1 633 3444', 
			'30-34 Westmoreland St, Dublin 2, Ireland', 'D02 HK35', '53.346209', '-6.259032', 
			'C:/Users/Andres/Google Drive/CCT/Craic/image/CCT_logo.png')"; 
  
	$result = mysqli_query($connection,$sql);

	if (!$result) {
	  die("Invalid query: " . mysqli_error($connection));
	}
	else { 
		echo "New business created successfully";
	}	
	
	mysqli_close($connection);
	
	
		
?>