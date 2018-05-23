<?php
$result = mysqli_query($con,"SELECT * FROM tbllogo");
  while ($row = mysqli_fetch_array($result)) {

    $id = $row['utilitylogoID'];
    $name = $row['utilitylogoName'];
    $path = $row['utilitylogoPath'];
    $type = $row['utilitylogoType'];

  }
     ?>

<section class="sidebar">
  <div class="user-panel">
    <div align="center">
      <img src="<?php echo $path ?>" height="80" width="140" style="margin-top: 1em; margin-bottom: 1em">
    </div>
  </div>
<ul class="sidebar-menu" >
<li class="treeview">
<a href="#">
  <i class="fa fa-link"></i>
     <img src="dist/img/maintenance.png" height="45" width="45">&nbsp;&nbsp;Maintenance <b class="caret"></b>
  <i class="fa fa-angle-left pull-right"></i></a>
<ul class="treeview-menu">
  <li><a href="maintenance-category.php"> Coverage Category</a></li>
  <li><a href="maintenance-coverage.php" > Coverage</a></li>
<li class="treeview">
  <a href="#">
    <i class="fa fa-link"></i>
       Services<b class="caret"></b>
    <i class="fa fa-angle-left pull-right"></i></a>
  <ul class="treeview-menu">
    <li><a href="maintenance-standard.php"> Standard Services</a></li>
    <li><a href="maintenance-additional.php"> Additional Services</a></li>
  </ul>
</li>
  <li><a href="maintenance-room.php"> Room</a></li>
  <li><a href="maintenance-requirement.php"> Requirement</a></li>
  <li><a href="maintenance-membership.php"> Membership Type</a></li>
  <li><a href="maintenance-pec.php"> Pre Existing Condition</a></li>
  <li><a href="maintenance-plan.php"> Plan</a></li>
</ul>
</li>
<li class="treeview">
<a href="#">
<i class="fa fa-link"></i>
<img src="dist/img/transaction.png" height="45" width="45">&nbsp;&nbsp;Transaction <b class="caret"></b>
<i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
      <li style="color: white"> Contract</li>
      <li><a href="transaction-contract-hospital.php" > Hospital</a></li>
      <li><a href="transaction-contract-company.php" > Company</a></li>
      <li><a href="transaction-contract-member.php" > Member</a></li>
      <li style="color: white">Claims</li>
      <li class="divider"></li>
      <li><a href="transaction-claims-patient.php" > Patient<span class="label label-primary pull-right" id="count2"></span></a></li>
      <li><a href="transaction-claims-doctor.php" > Doctor<span class="label label-primary pull-right" id="count"></a></li>
      <li style="color: white">Collection</li>
      <li class="divider"></li>
      <li><a href="transaction-collection-billing.php" > Billing</a></li>
      <li><a href="transaction-collection-payment.php" > Payment</a></li>
    </ul>
</li>
<li class="treeview">
  <a href="#">
    <i class="fa fa-link"></i>
       <img src="dist/img/query.png" height="45" width="45">&nbsp;&nbsp;Queries <b class="caret"></b>
     <i class="fa fa-angle-left pull-right"></i></a>
     <ul class="treeview-menu">
       <li><a href="query-category.php" > Coverage Category</a></li>
       <li><a href="query-coverage.php" > Coverage</a></li>
       <li><a href="query-services.php"> Services</a></li>
       <li><a href="query-room.php" > Room</a></li>
       <li><a href="query-requirement.php" > Requirement</a></li>
       <li><a href="query-plan.php" > Plan</a></li>
       <li><a href="query-hospital.php"> Hospital</a></li>
       <li><a href="query-company.php" > Company</a></li>
       <li><a href="query-member.php" > Member</a></li>
     </ul>
</li>
<li class="treeview active">
  <a href="report.php">
    <i class="fa fa-link"></i>
       <img src="dist/img/report.png" height="45" width="45">&nbsp;&nbsp;Reports <b class="caret"></b>
    <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
      <li><a href="report-contract.php"> Contract</a></li>
      <li class="active"><a href="#"> Collection</a></li>
      <li><a href="report-claims.php"> Claims</a></li>
      <li><a href="report-disbursement.php" > Disbursement</a></li>
    </ul>
</li>
<li class="treeview">
  <a href="#">
    <i class="fa fa-link"></i>
       <img src="dist/img/utility.png" height="45" width="45">&nbsp;&nbsp;Utilities <b class="caret"></b>
    <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
      <li><a href="utilities-employee.php"> Employee</a></li>
      <li><a href="utilities-skins.php"> System Settings</a></li>
    </ul>
</li>
  </ul>
</section>

<script>

function patientClaim(type, msg){
  $('#notification_patient').html(msg);
  $('#count2').html(msg);
}

function waitforpatient(){
  $.ajax({
    type: "GET",
    url: "patientNotif.php",
    async: true,
    cache: false,
    timeout: 50000,
    success: function(data){
      patientClaim("new",data);
      setTimeout(waitforclaims, 1000);
    }
  });
};
$(document).ready(function(){
  waitforpatient();
});

function doctorClaim(type, msg){
  $('#notification_doctor').html(msg);
  $('#count').html(msg);
}

function waitfordoctor(){
  $.ajax({
    type: "GET",
    url: "doctorNotif.php",
    async: true,
    cache: false,
    timeout: 50000,
    success: function(data){
      doctorClaim("new",data);
      setTimeout(waitforclaims, 1000);
    }
  });
};
$(document).ready(function(){
  waitfordoctor();
});

</script>
