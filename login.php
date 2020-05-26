

<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Normalize -->
    <link href="css/normalize.css" rel="stylesheet">
    <!-- style -->
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</head>

<body>
  <main>
  <h2 class="h2"> Please enter your e-mail address and your password</h2>
  	<div class="formulaire">
		<form action="includes/login.inc.php" method="POST">
		<div> <?php 
      if (isset($_GET['login']) == true) {
        if($_GET['login'] == 'empty')
          echo 'Please fill in both fields'.PHP_EOL;
        if($_GET['login'] == 'password')
          echo 'Wrong password'.PHP_EOL;
        if($_GET['login'] == 'logout')
          echo 'You have logged out'.PHP_EOL;
        if($_GET['login'] == 'false')
          echo 'You need to log in first'.PHP_EOL;
        if($_GET['login'] == 'submit')
          echo 'You need to fill in the form'.PHP_EOL;
        if($_GET['login'] == 'email')
          echo 'Email does not exist'.PHP_EOL;
        if($_GET['login'] == 'error')
          echo 'Woups, an error occured O.o'.PHP_EOL;
      }
      if (isset($_GET['signup']) == true) {
        if($_GET['signup'] == 'success')
          echo 'User created'.PHP_EOL;
      }
    ?> </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Email address</label>
		    <input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Password</label>
		    <input type="password" name="pwd1" class="form-control" id="exampleInputPassword1" placeholder="Password">
		  </div>
		  <button type="submit" name="submit" class="btn btn-default">Log In</button>
      <h3> No login yet ? <a href ="inscription.php"> Sign up !</a></h2>
		</form>
	</div>
</body> 
</html> 