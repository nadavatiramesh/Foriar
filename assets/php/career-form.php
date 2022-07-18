<?php

$errorMSG = "";

// NAME
if (empty($_POST["Cc_Name"])) {
    $errorMSG = "Name is required ";
} else {
    $Cc_Name = $_POST["Cc_Name"];
}

// EMAIL
if (empty($_POST["Cc_Email"])) {
    $errorMSG .= "Email is required ";
} else {
    $Cc_Email = $_POST["Cc_Email"];
}

// MSG SUBJECT
if (empty($_POST["Cc_code"])) {
    $errorMSG .= "Subject is required ";
} else {
    $Cc_code = $_POST["+91"];
}

// Phone Number
if (empty($_POST["Cc_Phone"])) {
    $errorMSG .= "Number is required ";
} else {
    $Cc_Phone = $_POST["Cc_Phone"];
}
// MSG SUBJECT
if (empty($_POST["Cc_job"])) {
    $errorMSG .= "Job Name is required ";
} else {
    $Cc_job = $_POST["Cc_job"];
}

// Phone Number
if (empty($_POST["Cc_resume"])) {
    $errorMSG .= "Upload Resume ";
} else {
    $Cc_resume = $_POST["Cc_resume"];
}





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

// if(mysqli_query($conn, $sql)){
//     session_start();
//     $_SESSION['success'] = 'Your Details are Submited. Our People Connect with you soon';
//     header("location: ../contact.php");
//     exit();
// } else{
//     echo "ERROR: Hush! Sorry $sql. "
//         . mysqli_error($conn);
// }
if (mysqli_query($conn, $sql)){
    echo "success";
 }else{
     if($errorMSG == ""){
         echo "Something went wrong :(";
     } else {
         echo $errorMSG;
     }
 }

// Close connection
mysqli_close($conn);
// var_dump($success);

// redirect to success page


?>