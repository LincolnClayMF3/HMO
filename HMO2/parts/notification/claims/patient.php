<li class="dropdown notifications-menu">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
    <i class="fa fa-bell-o"></i>
    <span style="color: blue" id="notification_patient" class="glyphicon glyphicon-credit-card"></span>
  </a>
  <ul class="dropdown-menu">

    <li>
      <ul class="menu">
        <li>
          <a href="transaction-claims-patient.php">
            <i class="fa fa-users text-aqua"></i> <span id="count2"></span> New Patient Claim
          </a>
        </li>
      </ul>
    </li>
  </ul>
</li>


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

</script>
