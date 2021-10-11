<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../css/signupstyle.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

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

$sql = "INSERT INTO signup (FirstName, LastName, Email, password, CPassword, PhoneNo, City) VALUES ('$FirstName', '$LastName', '$Email', '$password', '$CPassword', '$PhoneNo', '$City')";

if($conn -> query($sql) === TRUE){
       
    echo '<div class="alert alert-success" role="alert">
      Your Account is SUCCESSFULLY CREATED! 
    </div>';
    echo "Successfully Inserted";
    header("location: welcome.php");
    

}
else{
    echo "Error: $sql <br> $conn->error";
}

$conn->close();
}




?>
</body>
</html>