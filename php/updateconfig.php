<?php
/*
This file contains database configuration using user "root" and password ""
*/
if(isset($_POST['Email'])){

// define('DB_SERVER', 'localhost');
$DB_SERVER = "localhost";
// define('DB_USERNAME', 'root');
$DB_USERNAME = "root";
// define('DB_PASSWORD', '');
$DB_PASSWORD = "";
// define('DB_NAME', 'login');
$DB_NAME = "login";

// Try connecting to the Database
$conn = new mysqli($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

//Check the connection


// echo"great work";

$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$Email = $_POST['Email'];
$password = $_POST['password'];
$CPassword = $_POST['CPassword'];
$PhoneNo = $_POST['PhoneNo'];
$City = $_POST['City'];

$sql = "UPDATE signup SET FirstName = '$FirstName', LastName = '$LastName', password = '$password', CPassword = '$CPassword', PhoneNo = '$PhoneNo', City = '$City' WHERE Email = '$Email'";

$result = $conn->query($sql);
if($result == 1){
echo "Successfully Updated!";
header ("location: welcome.php");
} else{
    echo "Invalid Email";
}
$conn->close();


}


?>