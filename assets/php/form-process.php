<?php

$errorMSG = "";

// NAME
if (empty($_POST["C_Name"])) {
    $errorMSG = "Name is required ";
} else {
    $C_Name = $_POST["C_Name"];
}

// EMAIL
if (empty($_POST["C_Email"])) {
    $errorMSG .= "Email is required ";
} else {
    $C_Email = $_POST["C_Email"];
}

// MSG SUBJECT
if (empty($_POST["C_Code"])) {
    $errorMSG .= "Subject is required ";
} else {
    $C_Code = $_POST["+91"];
}

// Phone Number
if (empty($_POST["C_Phone"])) {
    $errorMSG .= "Number is required ";
} else {
    $C_Phone = $_POST["C_Phone"];
}
// MSG SUBJECT
if (empty($_POST["C_Subject"])) {
    $errorMSG .= "Subject is required ";
} else {
    $C_Subject = $_POST["C_Subject"];
}

// Phone Number
if (empty($_POST["C_Message"])) {
    $errorMSG .= "Number is required ";
} else {
    $C_Message = $_POST["C_Message"];
}





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
$C_Subject   = $_REQUEST['C_Subject'];
$C_Message = $_REQUEST['C_Message'];
// Performing insert query execution
// here our table name is college
$sql = "INSERT INTO contacts VALUES (DEFAULT,'$C_Name',
    '$C_Email','+91', '$C_Phone', '$C_Subject', '$C_Message' )";

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