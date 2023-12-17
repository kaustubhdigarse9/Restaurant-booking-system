<?php include("connection69.php");
error_reporting(E_ERROR | E_PARSE);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<script type="text/javascript" src="message2.js"></script>
  <style>
    body{
      background-color:#D071F9;
      padding:0 10px;
    }
    *{
      padding:0;
      margin:0;
      box-sizing:border-box;

    }

    .container{
      
      max-width:500px;
      background-color:white;
      margin:20px auto;
      padding:30px;
      box-shadow: 5px 5px 5px rgba(0,0,0,0.125);
    }

    .container .title{
      font-size:24px;
      font-weight:700;
      margin-bottom:25px;
      color:#D071F9;
      text-transform:uppercase;
      text-align:center;
}

.container .form{
  width:100%;
}

.container .form .input_field {
  margin-bottom:15px;
  display:flex;
  align-items:center;
}

.container .form .input_field label{
  width:200px;
  margin-right:10px;
  font-size:14px;
  
  
}

.container .form .input_field .input,
.container .form .input_field textarea
{
  outline:none;
  width:100%;
  border:1px solid #D071F9;
  font-size:15px;
  padding:8px 10px;
  border-radius:3px;



}
.container .form .input_field .selectbox
{
  height:35px;
  width:100%;
  border:1px solid #D071F9;
}
.container .form .input_field .btn{
  width:100%;
  padding:8px 10px;
  font-size:15px;
  background:#D071F9;
  border:0;
  cursor:pointer;
  border-radius:3px;
  outline:0;
  color:white;


}
.container .form .input_field .btn:hover{
  background:purple;
}
    </style>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script defer src="message2.js" ></script>
  <title>Document</title>
</head>





<body>

<form name="myform" method="POST" onsubmit="return validate()"  >
  <div class="container">
    
    <div class="title">
    Payment Form
</div>
<div class="form">
  <div class="input_field">
    <label>Name</label>
    <input type="text" class="input" name="fname" required>
</div>

<div class="input_field">
    <label>enter number of adults</label>
    <input type="number" class="input" name="adults" required>
</div>

<div class="input_field">
    <label>enter number of children</label>
    <input type="number" class="input" name="children" required>
</div>

<div class="input_field">
    <label>Resturant Name</label>
    <select class="selectbox" name="rname" required>
      <option>select</option>
      <option>The Earth Plate - Global Cuisine</option>
      <option>Banjara</option>
      <option>Lotus Cafe</option>
      <option>Ishaara</option>
      <option>Peshawri</option>
      <option>The Bayview</option>
      <option>Mamagoto<option>
      <option>San-Qi<option>
      <option>China House Restaurant<option>
      <option>The Oriental Blossom<option>
      <option>China Ming<option>
      <option>KOKO<option>
      <option>Tafe Terrace Cafe</option>
      <option>Celini</option>
      <option>Fable</option>
      <option>Aromas Cafe & Bistro</option>
      <option>Jamie's Pizzeria</option>
      <option>Little Italy</option>
      <option>London Taxi</option>
      <option>The Caravan Menu</option>
      <option>Olive Bar & Kitchen</option>
      <option>The Goose & Gridiron</option>
      <option>Donna Deli</option>
      <option>The Society - Fine Dine Restaurant</option>
      <option>Thangabali</option>
      <option>Cafe Madras</option>
      <option>South of Vindhyas</option>
      <option>SamBar Pub & Kitchen</option>
      <option>Aavakay</option>
      <option>Dakshin Culture Curry</option>
      <option>Food BKC</option>
      <option>Chin Chin Chu</option>
      <option>F00-Asian Tapas</option>
      <option>Diablo</option>
      <option>Yazu-Pan Asian Supper Club</option>
      <option>Zenmai</option>
</select>
</div>

<div class="input_field">
    <label>Phone Number</label>
    <input id="zamn" type="number" class="input" name="mobileno" required>
</div>

<div class="input_field">
    <label>Date</label>
    <input type="date" class="input" name="extra" required>
</div>
<div class="input_field">
  <label>Time</label>
  <input type="time" class="input" name="appt" required>
</div>
<div class="input_field">
  <input type="submit" value="payment" class="btn" name="payment" >

</div>

</div>
</form>
  
</body>
</html>


<?php
if($_POST['payment'])
{
  $fname=$_POST['fname'];
  $adults=$_POST['adults'];
  $children=$_POST['children'];
  $rname=$_POST['rname'];
  $mobileno=$_POST['mobileno'];
  $extra=$_POST['extra'];
  $time=$_POST['appt'];

  $query= "INSERT INTO sam values('$fname','$adults','$children','$rname','$mobileno','$extra','$time')";
  $data= mysqli_query($conn,$query);
  if($data)
  {
    echo '<script>
    alert("Details Entered Successfully Please Proceed For Payment");
    window.location.href = "cardz.html";
    </script>';

  }

  else
  {
    echo "fail";
  }



}
 

?>
