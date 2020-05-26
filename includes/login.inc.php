<?php
session_start();

if (isset($_POST['submit'])) {

	include_once "dbh.inc.php";
	$email = $_POST['email'];
	$pwd = $_POST['pwd1'];

	if (empty($email) || empty($pwd)) {
		header("Location: ../login.php?login=empty");
		exit();
	}
	else {
		$sql = "SELECT * FROM users WHERE email = '$email' ;";
		$result = $conn->query($sql);
		$row = $result->fetch();
		if($row != false) {
			$hashedPwdCheck = password_verify($pwd, $row['password']);
			if ($hashedPwdCheck == false) {
				header("Location: ../login.php?login=password");
				exit();
			} elseif($hashedPwdCheck == true) {
				// log user in 
				$_SESSION['user_id']= $row['username'];
				$_SESSION['user_admin']= $row['admin'];
				$_SESSION['user_email']= $row['email'];
				header("Location: ../index.php");
				exit();
			} else {
				header("Location: ../login.php?login=error");
				exit();
			}	
		}
		else {
			header("Location: ../login.php?login=email");
			exit();
		}
	}
}  
else {
	header("Location: ../login.php?login=submit");
	exit();
}