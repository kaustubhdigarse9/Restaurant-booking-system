<?php include("connection2.php");
error_reporting(E_ERROR | E_PARSE);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Payment Form</title>
    <link rel="stylesheet" href="style2.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <script>
      alert("DETAILS ENTERED SUCCESSFULLY!!PROCEED FOR PAYMENT");
    </script>
    <form name="myform" method="POST" onsubmit="return validate()" action="hello.html">
    <div class="container">
      <h1>Confirm Your Payment</h1>
      <div class="first-row">
        <div class="owner">
          <h3>Owner</h3>
          <div class="input-field">
            <input type="text" name="owner" />
          </div>
        </div>
        <div class="cvv">
          <h3>CVV</h3>
          <div class="input-field">
            <input type="password" name="cvv" />
          </div>
        </div>
      </div>
      <div class="second-row">
        <div class="card-number">
          <h3>Card Number</h3>
          <div class="input-field">
            <input type="text" name="cardnumber" />
          </div>
        </div>
      </div>
      <div class="third-row">
        <h3>Card Number</h3>
        <div class="selection">
          <div class="date">
            <select name="months" id="months" name="month">
              <option value="Jan">Jan</option>
              <option value="Feb">Feb</option>
              <option value="Mar">Mar</option>
              <option value="Apr">Apr</option>
              <option value="May">May</option>
              <option value="Jun">Jun</option>
              <option value="Jul">Jul</option>
              <option value="Aug">Aug</option>
              <option value="Sep">Sep</option>
              <option value="Oct">Oct</option>
              <option value="Nov">Nov</option>
              <option value="Dec">Dec</option>
            </select>
            <select name="years" id="years" nam="year">
              <option value="2020">2020</option>
              <option value="2019">2019</option>
              <option value="2018">2018</option>
              <option value="2017">2017</option>
              <option value="2016">2016</option>
              <option value="2015">2015</option>
            </select>
          </div>
          <div class="cards">
            <img src="mc.png" alt="" />
            <img src="vi.png" alt="" />
            <img src="pp.png" alt="" />
          </div>
        </div>
      </div>
      <input type="submit" value="payment" class="btn" name="payment" >
    </div>
    </form>
  </body>
</html>

<?php
if($_POST['payment'])
{
  $owner=$POST['owner'];
  $cvv=$POST['cvv'];
  $cardnumber=$POST['cardnumber'];
  $month=$POST['month'];
  $year=$POST['year'];
 

  $query= "INSERT INTO hug values('$owner','$cvv','$cardnumber','$month','$year')";
  $data= mysqli_query($conn,$query);
  if($data)
  {
    echo '<script>alert("payment done successfully")</script>';
  }

  else
  {
    echo "fail";
  }



}
 

?>