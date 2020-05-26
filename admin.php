<?php
  session_start();

  if (!isset($_SESSION['user_id'])) {
    header("Location: login.php?login=false");
    return;
  }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Admin</title>

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
  </head>
  

<body>
  <header>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <a class="navbar-brand" href="#"><img src="image/php.png"></a> <h2>ADMIN</h2>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Bonjour <?php echo $_SESSION['user_id'] ?> !</a></li>
            <li><a href="includes/logout.inc.php">Log out</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
     <div class="navb">
      <a href="index.php">Notre concept</a>
      <a href="#">Nos produits</a>
      <a href="#">Contactez-nous</a>
    </div>
  </header>

  <main>
  <h2 class="h2"> Create user</h2>
    <div class="formulaire">
    <form action="includes/adduser.admin.inc.php" method="POST">
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
        if($_GET['signup'] == 'success')
          echo 'User created'.PHP_EOL;
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
      <label class="switch">
  <input type="checkbox" name="admin" value="1">
  <span class="slider round"></span>
</label>
      <button type="submit" name="submit" class="btn btn-default">Create user</button>
    </form>
  </div>
</body> 
</html> 