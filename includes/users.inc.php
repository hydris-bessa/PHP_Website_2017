<?php
include_once "dbh.inc.php";

class User
{
  protected $_name;
  protected $_email;
  protected $_password;
  protected $_admin;
  
  function signup($conn) {
    $sql = "INSERT INTO users (username, password, email, admin) VALUES ('$this->_name', '$this->_password', '$this->_email', '$this->_admin')";
    $addUser = $conn->query($sql);
  }

  function __construct($name, $email, $password, $conn, $admin=NULL)
  {
    $this->_name = $name;
    $this->_email = $email;
    $this->_password = $password;
    if ($admin == 1)
      $this->_admin = 1;
    else 
      $this->admin = 0;
    $this->signup($conn);
  }

}