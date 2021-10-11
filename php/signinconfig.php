<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
        $server = "localhost";
        $username = "root";
        $password = "";
        $database = "login";

        $conn = mysqli_connect($server, $username, $password, $database);
        if (!$conn){
        //     echo "success";
        // }
        // else{
            die("Error". mysqli_connect_error());
        }

    // include 'partials/_dbconnect.php';
    $Email = $_POST["Email"];
    $password = $_POST["password"]; 
    
     
    $sql = "Select * from signup where Email='$Email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['Email'] = $Email;
        header("location: welcome.php");

    } 
    else{
        echo "Invalid Credentials";
    }
}
    
?>