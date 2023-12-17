<?php
require 'config.php';

if(isset($_POST["submit"])){
  $usernameemail = $_POST["usernameemail"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$usernameemail' OR email = '$usernameemail'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: index.php");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      body {
        min-height: 100vh;
        background: #eee;
        display: flex;
        font-family: sans-serif;
        background-image: url(img/resturantz.jpg);
        background-position: center;
        background-size: cover;
      }

      .container {
        margin: auto;
        width: 500px;
        max-width: 90%;
      }

      .container form {
        width: 100%;
        height: 100%;
        padding: 20px;
        background: white;
        border-radius: 4px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
      }
      .container form h1 {
        text-align: center;
        margin-bottom: 24px;
        color: #222;
      }

      .container form .form-control {
        width: 100%;
        height: 40px;
        background: white;
        border-radius: 4px;
        border: 1px solid silver;
        margin: 10px 0 18px 0;
        padding: 0 10px;
      }

      .container form .btn {
        margin-left: 50%;
        width: 120px;
        height: 34px;
        border: none;
        outline: none;
        background: #27a327;
        cursor: pointer;
        font-size: 16px;
        text-transform: uppercase;
        color: white;
        border-radius: 4px;
        transition: 0.3s;
     
      }

      .rr{
        text-align:right;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <form action="helo.html"  name="myform" method="post">
        <h1>Login form</h1>
        <div class="from-group">
          <label for="">Username/Email</label>
          <input type="text" class="form-control" required 
          name="usernameemail"
          id="usernameemail" />
        </div>

        <div class="from-group">
          <label for="">Password</label>
          <input
            type="password"
            class="form-control"
            required
            name="password"
            id="password"
          />
        </div>
        <div class="from-group">
          <a href="registration.php">Click here to Register</a>
        </div>
        <div class="rr">
        <input type="submit" class="btn" value="Login" name="submit"  />
      </div>
        </form>
      </form>
    </div>
  
  </body>
</html>
