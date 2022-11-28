<?php
$servename = "localhost";
$username = "root";
$password = "";
$dbname = "SDL";
$conn = new mysqli($servename,$username,$password,$dbname);

if ($conn ->connect_error) {
    die("Connection failed" .$conn->connect_error);
}

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];

$sql = "INSERT INTO info VALUES($name,$email,$message)";

if($conn->query($sql)===TRUE) {
    echo "Message sent successfully";
}
else {
    echo "Error" .$sql . "at" .$conn->error;
}
?>