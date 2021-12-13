<?php
session_start();

include 'DBconnect.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query= "SELECT UserID, Username, Password FROM users WHERE Username='".$username."'";
$result = $conn->query($query);
$row = $result->fetch_object();

if (isset($_POST['login'])){
	if ($username == $row->Username && $password == $row->Password){
		$_SESSION['UserID'] = $row->UserID;
		header('location:../home.php');
	} else {
		header('location:../login.php');
	}
}

?>