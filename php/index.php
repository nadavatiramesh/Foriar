

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
		$Nl_Email = $_REQUEST['Nl_Email'];
		$Nl_Status = $_REQUEST['Yes'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO newsletters VALUES (DEFAULT,'$Nl_Email',
			'Yes')";
		
		if(mysqli_query($conn, $sql)){
            echo "Records inserted successfully.";
            header("location: ../index.html");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
</body>

</html>
