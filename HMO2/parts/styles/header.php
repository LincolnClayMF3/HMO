<?php

require 'parts/notification/contract/company.php';

?>

<a href="#" class="logo">
  <span><small style="color: white; font-size: 12px; font-style: italic" id="timeAndDate"></small></span>
</a>

<nav class="navbar navbar-static-top" role="navigation">

<div align="center">
  <span style="font-size: 25px; text-shadow: 0px 0px 7px black; color: white; font-variant: small-caps;">
    Contract and Claims Management with Collections Monitoring System
  </span>
  <div class="navbar-custom-menu">

    <ul class="nav navbar-nav">

      <li>
        <a href="home.php">Home</a>
      </li>


      <li class="dropdown user user-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <img src="dist/img/admin.png" class="user-image" alt="User Image">
          <span class="hidden-xs"><?php echo $userName?></span>
        </a>
        <ul class="dropdown-menu">
          <li class="user-header">
            <img src="dist/img/admin.png" class="img-circle" alt="User Image">
            <p>
              <?php echo $userName?>
            </p>
          </li>
          <li class="user-footer">
            <div class="pull-left">
              <a href="#" data-toggle="modal" data-target="#profile" >
                <button class="btn btn-default btn-flat">Profile</button></a>
            </div>
            <div class="pull-right">
              <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
            </div>
          </li>
        </ul>
      </li>
      <li>
        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
      </li>
    </ul>
  </div>
</div>

<!-- <div class="modal fade" id="profile" role="dialog" style="width: 100%" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="margin-top: 6em; margin-left: 1em">
      <div class="modal-header">
        <button class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">
          Profile
        </h4>
      </div>
      <div class="modal-body">

          <div class="form-group col-xs-12">
            <label>Administrator</label>
          </div>

          <div class="form-group col-xs-4">
            <label>Last Name</label>
          </div>

          <div class="form-group col-xs-4">
          <label>First Name</label>
          </div>

          <div class="form-group col-xs-4">
          <label>Middle Name</label>
          </div>

          <div class="form-group col-xs-4">
            <label>Telephone No.</label>
          </div>

          <div class="form-group col-xs-4">
          <label>Mobile No.</label>
          </div>

          <div class="form-group col-xs-4">
          <label>Email</label>
          </div>

        <div class="form-group col-xs-6">
          <label>Birthdate</label>
        </div>

        <div class="form-group col-xs-6">
          <label>Status</label>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal" name="btnCancel">Close</button>
      </div>
    </div>
  </div>
</div> -->


</nav>




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
