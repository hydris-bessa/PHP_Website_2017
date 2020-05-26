

<!DOCTYPE html>
<html>
<head>
  <title>Inscirption</title>
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
  <h2 class="h2"> Welcome ! Please fill in the form</h2>
  	<div class="formulaire">
		<form action="includes/signup.inc.php" method="POST">
		<div> <?php
      if (isset($_GET['signup']) == true) {
        if($_GET['signup'] == 'name')
          echo 'Invalid name'.PHP_EOL;
        if($_GET['signup'] == 'email')
          echo 'Invalid email'.PHP_EOL;
        if($_GET['signup'] == 'pwd')
          echo 'Invalid password or password confirmation'.PHP_EOL;
        if($_GET['signup'] == 'usertaken')
          echo 'This email is already used'.PHP_EOL;
      }   
    ?> </div>
      <div class="form-group">
        <label for="exampleInputEmail1"> Name </label>
        <input type="text" name="name" class="form-control" placeholder="Name">
      </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Email address</label>
		    <input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Password</label>
		    <input type="password" name="pwd1" class="form-control" id="exampleInputPassword1" placeholder="Password">
		  </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password confirmation</label>
        <input type="password" name="pwd2" class="form-control" id="exampleInputPassword1" placeholder="Password">
      </div>
		  <button type="submit" name="submit" class="btn btn-default">Sign up</button>
		</form>
	</div>
</body> 
</html> 