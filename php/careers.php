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
		$Cc_Name = $_REQUEST['Cc_Name'];
		$Cc_Email = $_REQUEST['Cc_Email'];
        $Cc_code  = $_REQUEST['+91 '];
		$Cc_Phone = $_REQUEST['Cc_Phone'];
        $Cc_job   = $_REQUEST['Cc_job  '];
		$Cc_resume = $_REQUEST['Cc_resume'];
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO careercandidate VALUES (DEFAULT,'$Cc_Name',
			'$Cc_Email','+91', '$Cc_Phone', '$Cc_job', '$Cc_resume' )";
		
		if(mysqli_query($conn, $sql)){
            echo '<script language="javascript">';
            header("location: ../careers.html");
            echo '</script>';
            $_SESSION['success'] = $_POST['Your Details are Submited. Our People Connect with you soon'];
         
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
</body>

</html>
