

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
		$C_Name = $_REQUEST['C_Name'];
		$C_Email = $_REQUEST['C_Email'];
        $C_Code  = $_REQUEST['+91 '];
		$C_Phone = $_REQUEST['C_Phone'];
        $C_Subject   = $_REQUEST['C_Subject  '];
		$C_Message = $_REQUEST['C_Message'];
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO contacts VALUES (DEFAULT,'$C_Name',
			'$C_Email','+91', '$C_Phone', '$C_Subject', '$C_Message' )";
		
		if(mysqli_query($conn, $sql)){
			session_start();
            $_SESSION['success'] = 'Your Details are Submited. Our People Connect with you soon';
			header("location: ../contact.php");
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
