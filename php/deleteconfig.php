<?php
if(isset($_POST['Email'])){

$server='localhost';
$username = 'root';
$password = '';
$dbname = 'login';


$mysqli = new mysqli($server, $username,$password, $dbname);


                if ($mysqli->connect_error) {
                    die('Connect Error (' .
                    $mysqli->connect_errno . ') '.
                    $mysqli->connect_error);
                }

$Email = $_POST['Email'];

$sql = "DELETE from signup WHERE Email = '$Email'";
$result = $mysqli->query($sql);
if($result==1){
    echo "Data Deleted Successfully";
    header("location: index.php");
}else{
    echo "Invalid Credentials";
}
$mysqli->close();
}
?>