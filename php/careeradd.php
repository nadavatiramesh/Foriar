<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "forierlab");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}

		// Taking all 5 values from the form data(input)
		$J_Title = $_REQUEST['J_Title'];
		$J_Oaddress = $_REQUEST['J_Oaddress'];
        $J_Location  = $_REQUEST['J_Location'];
		$J_CVemail = $_REQUEST['J_CVemail'];
        $J_Qtitle   = $_REQUEST['J_Qtitle'];
		$J_Qcontent = $_REQUEST['J_Qcontent'];
		$J_PQtitle = $_REQUEST['J_PQtitle'];
        $J_PQcontent   = $_REQUEST['J_PQcontent'];
		$J_Rtitle = $_REQUEST['J_Rtitle'];
		$J_Rcontent = $_REQUEST['J_Rcontent'];
        $J_Jobtitle   = $_REQUEST['J_Jobtitle'];
		$J_jobcontent = $_REQUEST['J_jobcontent'];
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO joblist VALUES (DEFAULT,'$J_Title',
			'$J_Oaddress','$J_Location', '$J_CVemail', '$J_Qtitle', '$J_Qcontent','$J_PQtitle', '$J_PQcontent', '$J_Rtitle',
			'$J_Rcontent', '$J_Jobtitle', '$J_jobcontent' )";
	
	if(mysqli_query($conn, $sql)){
		session_start();
		$_SESSION['success'] = 'Your Details are Submited. Our People Connect with you soon';
		header("location: ../careeradd.php");
		exit();
	} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
</body>

</html>
