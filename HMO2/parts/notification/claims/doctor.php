<li class="dropdown notifications-menu">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
    <i class="fa fa-bell-o"></i>
    <span style="color: orange" id="notification_doctor" class="glyphicon glyphicon-credit-card"></span>
  </a>
  <ul class="dropdown-menu">

    <li>
      <ul class="menu">
        <li>
          <a href="transaction-claims-doctor.php">
            <i class="fa fa-users text-aqua"></i><span id="count"></span> New Doctor Claim
          </a>
        </li>
      </ul>
    </li>
  </ul>
</li>

<script>

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
