<?php
require 'config.php';

if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];
  $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  else{
    if($password == $confirmpassword){
      $query = "INSERT INTO tb_user VALUES('','$name','$username','$email','$password')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
    }
    else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  }
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
  <script type="text/javascript" src="regis.js"></script>
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


    
      </script>
    <div class="container">
        
        <form action=""  name="myform2" method="post" onsubmit="return validate()">
        <h1>Registration Form </h1>
        <div class="from-group">
          <label for="name">Enter Name</label>
          <input type="text" class="form-control" required name="name" id="name" />
        </div>

        <div class="from-group">
          <label for="username">Enter UserName</label>
          <input
            type="text"
            class="form-control"
            required
            name="username"
            id="username"

            
          >
        </div>
        <div class="form-group">
          <label for="email">Enter Email</label>
          <input type="email"
          class="form-control"
          required 
          name="email"
          id="email">
        </div>

        <div class="form-group">
          <label for="password">Enter Password</label>
          <input type="password"
          class="form-control"
          required 
          name="password"
          id="password">
        </div>

        <div class="form-group">
          <label for="confimpassword">Confirm Password</label>
          <input type="password"
          class="form-control"
          required 
          name="confirmpassword"
          id="confirmpassword">
        </div>


        <div class="from-group">
          <a href="login.php">Back To Login Page</a>
        </div>
        <div class="rr">
        <input type="submit" class="btn" value="Register" name="submit"  />
      </div>
        </form>
      </form>
    </div>
    
  </body>
</html>
