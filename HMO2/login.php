<!DOCTYPE html>
<?php

session_start();


?>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="icon" type"image/ico" href="dist/img/logo.png">
    <?php

    require 'parts/functions/general.php';

    ?>

    <title>HMO | Login Form</title>

        <style>

      body{
        padding:0;
        margin:0;
        overflow:hidden
      }
      /*.login-body{
        overflow:hidden;
      }*/
      /*.bgvid{
        position:absolute;
        left:0;
        top:0;
        width:100vw;
      }*/
      /*.form-body{

        top:calc(50vh - 200px);
        left:calc(50vw - 200px);
        overflow:hidden;
        padding-top: 50px;
      }*/
      /*.bgvid.inner{
        top:calc(-50vh + 200px);
        left:calc(-50vw + 200px);
        filter: url("data:image/svg+xml;utf9,<svg%20version='1.1'%20xmlns='http://www.w3.org/2000/svg'><filter%20id='blur'><feGaussianBlur%20stdDeviation='10'%20/></filter></svg>#blur");
        -webkit-filter:blur(10px);
        -ms-filter: blur(10px);
        -o-filter: blur(10px);
        filter:blur(10px);
      }*/
      .form-content{

        height: auto;
        font-family:Helvetica;
        color:#fff;
        background:rgba(0,0,0,0.6);
        padding:20px;
        border-radius: 10px;


      }
      .form-content h1{
        text-align:center;
        margin:30px 0;
        font-size:30px;

      }
      .form-content input{
        display:block;
        width:300px;
        margin:20px auto;
        padding:15px;
        background:rgba(255,255,255,1);
        color:#000;
        border:0;
      }
      .form-content input:focus,.form-content input:active,.form-content button:focus,.form-content button:active{
        outline:none;
      }
      .form-content button{
        background:#2ecc71;
        border:0;
        color:#fff;
        padding-top:10px;
        font-size:20px;
        width:330px;
        margin:20px auto;
        display:block;
        cursor:pointer;
      }
      .form-content button:active{
        background:#27ae60;
      }
      .form-content p{
        font-size:14px;
        text-align:center;
      }
      .form-content p span{
        cursor:pointer;
        color:#666;
      }

      .row {
        /*padding-top: 100px;*/
      }

      #timeAndDate {
        font-size: 30px;
        background: rgba(0,0,0,0.3);
        border-radius: 10px;
        color: white;
        padding: 10px 50px;
        margin: 20px 0px;
        text-shadow: 1px 1px 2px black;
      }

      #carousel-img {
        height: 340px;
        width: auto;
      }

      .blur-background {
        -webkit-filter: blur(10px);
        -moz-filter: blur(10px);
        -o-filter: blur(10px);
        -ms-filter: blur(10px);
        filter: blur(10px);
      }

      marquee {
        background: rgba(0,0,0,0.3);
        font-size: 20px;
        border-radius: 10px;
        padding: 10px 0px;
        margin: 24px 0px;
        color: white;
        text-shadow: 1px 1px 2px black;
        align-content: center;
      }

      marquee p {
        margin: 0px 8px;
      }
    </style>
  </head>

  <body background="dist/img/2.jpg">

    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div id="timeAndDate"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-8" align="center">
          <div class="form-content" style="padding: 50px 0;">
            <div id="carousel-login" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#carousel-login" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-login" data-slide-to="1"></li>
                <li data-target="#carousel-login" data-slide-to="2"></li>
                <li data-target="#carousel-login" data-slide-to="3"></li>
                <li data-target="#carousel-login" data-slide-to="4"></li>
                <li data-target="#carousel-login" data-slide-to="5"></li>
                <li data-target="#carousel-login" data-slide-to="6"></li>
                <li data-target="#carousel-login" data-slide-to="7"></li>


              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img src="login-images/1.jpg" alt="HMO" id="carousel-img">
                </div>

                <div class="item">
                  <img src="login-images/3.jpg" alt="HMO"  id="carousel-img">
                </div>

                <div class="item">
                  <img src="login-images/4.jpg" alt="HMO"  id="carousel-img">
                </div>

                <div class="item">
                  <img src="login-images/5.jpg" alt="HMO"  id="carousel-img">
                </div>

                <div class="item">
                  <img src="login-images/6.jpg" alt="HMO"  id="carousel-img">
                </div>

                <div class="item">
                  <img src="login-images/7.jpg" alt="HMO"  id="carousel-img">
                </div>

                <div class="item">
                  <img src="login-images/8.jpg" alt="HMO"  id="carousel-img">
                </div>

                <div class="item">
                  <img src="login-images/9.jpg" alt="HMO"  id="carousel-img">
                </div>

              </div>

              <!-- Left and right controls -->
              <a class="left carousel-control" href="#carousel-login" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#carousel-login" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
          <marquee>
            <p>
              Powered by: PHP, Javascript, JQuery, Bootstrap, AmCharts, FPDF, FPDI, AJAX, AdminLTE
            </p>
          </marquee>
        </div>

        <div class="col-xs-4">
          <div class="form-content" align="center">
            <img src="dist/img/logo.png" alt="HMO Logo" style="width: auto; height: 100px; margin-bottom: -30px;"/>
            <form method="post" autocomplete="off">
              <h1 style="color: white; text-shadow: 1px 1px 3px black; font-variant: small-caps">Contract and Claims Managenment with Collections Monitoring System</h1>
              <input type="text" name = "user" placeholder="Username"/>
              <input type="password" name = "pass" placeholder="Password"/>
              <input type="submit" name="btnLogin" value="Login" style="background-color: #28c3da; border-radius: 10px; box-shadow: 0px 0px 3px black; text-shadow: 0px 0px 3px black;">
            </form>
          </div>
        </div>
      </div>

    </div>

    <?php

    if(isset($_POST['btnCreate'])){
      require 'parts/php/post/coverage/btnCreate.php';
    }

    ?>


<?php


if(isset($_POST['btnLogin'])){

$user = $_POST['user'];
$pass = $_POST['pass'];

require 'parts/php/connection.php';

$checkUser = mysqli_query($con, "SELECT *, CONCAT(userFirstName,' ',userLastName) AS name FROM tbluser
             WHERE username = '$user' AND password = '$pass' AND status = 'Active'");

    while ($row = mysqli_fetch_array($checkUser)) {
      $id = $row['userID'];
      $username = $row['username'];
      $password = $row['password'];
      $fullName = $row['name'];
      $status = $row['status'];
      $firstName = $row['userFirstName'];
      $type = $row['userType'];

    if( $type == "Administrator"){

      $_SESSION['name'] = $firstName;
      $_SESSION['type'] = $type;
      $_SESSION['fullName'] = $fullName;
      echo '<script type="text/javascript">';
      echo 'window.location.href = "home.php";';
      echo '</script>';
    }
    elseif ($type == "Coordinator") {
      
      $_SESSION['name'] = $firstName;
      $_SESSION['type'] = $type;
      $_SESSION['fullName'] = $fullName;
      echo '<script type="text/javascript">';
      echo 'window.location.href = "coordinator-claims.php";';
      echo '</script>';
    }
    else {
      ?>
      <script>
      alert("Account Does not Exist");
      </script>
      <?php
    }
  }




}

?>

  </body>
</html>
<script>


tday=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
tmonth=new Array("January","February","March","April","May","June","July","August","September","October","November","December");

function GetClock(){
  var d=new Date();
  var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getYear();
  if(nyear<1000) nyear+=1900;
  var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;

  if(nhour==0){ap=" AM";nhour=12;}
  else if(nhour<12){ap=" AM";}
  else if(nhour==12){ap=" PM";}
  else if(nhour>12){ap=" PM";nhour-=12;}

  if(nmin<=9) nmin="0"+nmin;
  if(nsec<=9) nsec="0"+nsec;

  document.getElementById('timeAndDate').innerHTML=""+tday[nday]+", "+tmonth[nmonth]+" "+ndate+", "+nyear+" "+nhour+":"+nmin+":"+nsec+ap+"";
}

window.onload=function(){
  GetClock();
  setInterval(GetClock,1000);
}
</script>
