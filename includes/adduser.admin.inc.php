<?php
// Gestion erreur Sign In: name, email, password
if (strlen($_POST['name']) < 3 || strlen($_POST['name']) > 10) {
	header("Location: ../admin.php?signup=name");
	return;
}
if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['email']) == false) {
	header("Location: ../admin.php?signup=email");
	return;
}
if ($_POST['pwd1']!=$_POST['pwd2'] || strlen($_POST['pwd1'])<3 || strlen($_POST['pwd1'])>10 ) {
	header("Location: ../admin.php?signup=pwd");
	return;
}


if (isset($_POST['submit'])) {

	include_once "dbh.inc.php";

	$pwd = password_hash($_POST['pwd1'], PASSWORD_DEFAULT);
	$name = $_POST['name'];
	$email = $_POST['email'];
	$admin = $_POST['admin'];

	// check for empty fields and used email
	if (empty($name) || empty($email) || empty($pwd)) {
		header("Location: ../admin.php?signup=empty");
		exit();
	} else {
		$sql = "SELECT * FROM users WHERE email='$email' ";
		$result = $conn->query($sql);
		$result_check = count($result->fetchAll());
		if ($result_check > 0 ) {
			header("Location: ../admin.php?signup=usertaken");
			exit();
		}
	}

	include_once ("users.inc.php");
	if ($admin == 1)
		new User($name, $email, $pwd, $conn, 1);
	else
		new User($name, $email, $pwd, $conn);

	header("Location: ../admin.php?signup=success");
}  else {
	header("Location: ../admin.php");
	exit();
}

