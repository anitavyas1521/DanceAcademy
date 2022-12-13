<?php
$host="localhost";
$user="root";
$password=" ";
$db="dance";
$con= new 
mysql_connect($host, $user, $password, $db);
con.open();
mysql_select_db($db);

if(isset($_POST['Email']))
{
    $uname=$_POST['Email'];
    $password=$_POST['Password'];
    $sql="select * from loginform  where Email='".$uname."' AND Password='".$password."' limit 1" ;

    $result=mysql_query($sql);
    if(mysql_num_rows($result)==1)
    {
        echo"successfully run the given code";
        exit();
    }
    else{
        echo"incorrect password";
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr>
    <head>
    <meta charset=" utf-8">
<!-----<title> LOGIN PAGE </title>---->
<style>
  body {
    background-image: url("jpg.jpeg");
    color: black;
    background-repeat: no-repeat;
    background-size: cover;
    margin-top: 100px;
    margin-left: 550px;
    height: 100px;
    width: 200px;
  }

  form {
    width: 400px;
    height: 300px;
    background-color: rgba(250, 228, 228, 0.637);
    margin-top: 100px;
    margin-right: 50px;
  }

  h1 {
    color: black;
    text-align: center;
  }

  #log {
    margin-left: 60px;
    width: 190px;
    height: 35px;
    background-color: rgb(220, 20, 203);
    color: aliceblue;
  }

  #Email {
    margin-left: 30px;
    width: 190px;
    height: 25px;
  }

  #Password {
    margin-left: 30px;
    width: 190px;
    height: 25px;
  }
</style>
</head>

<body>
  <form method="POST" action="home.html">
    <h1> LOGIN PAGE </h1>
    <div class="field">
      <label for="Email"> Email</label><br>
      <input type="text" name="Email" id="Email" />
    </div>
    </div>
    <div class="field">
      <label for="Password">Password</label><br>
      <input type="password" name="Password" id="Password" />
    </div>
    </div>
    <div class="content">
      <div class="checkbox">
        <div>
          <input type="checkbox" id="remember-me">
        </div>
        <label for="remember-me">Remember me</label>

        <a href="#" style="margin-left: 15px;"> Forgot Password?</a><br>
      </div><br>
      <div class="field">
        <input type="submit" id="log" value="Login">
      </div><br>
      <div class="singnup-link"> Not a member? 
        <div>
          </from>
        </div>
</body>

</html>