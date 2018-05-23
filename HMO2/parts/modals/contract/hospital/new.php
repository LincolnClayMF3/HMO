<div class="modal fade" id="newHospital" role="dialog" style="width: 100%" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="margin-top: 1em; margin-left: 3em">
      <div class="modal-header">
        <button class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">
          New Hospital
        </h4>
      </div>
      <div class="modal-body">
        <form class="hospitalform" role="form" method="post" autocomplete="off">
        <div class="form-group col-xs-6">
          <label><span class="glyphicon glyphicon-asterisk" style="color:red"></span> Hospital Name</label>
          <input type="text" class="form-control" name="hospitalName" placeholder="Enter Hospital Name" onkeypress="return validateName(event)"> <!-- dadagdagan ng tulok at apostrophe palang -->
        </div>

        <div class="form-group col-xs-6">
          <label><span class="glyphicon glyphicon-asterisk" style="color:red"></span> Hospital Address</label>
          <input type="text" class="form-control" name="hospitalAddress" placeholder="Enter Hospital Address" onkeypress="return validateNameAndNumber(event)"> <!-- dadagdagan ng dash palang -->
        </div>

        <div class="form-group col-xs-6">
          <label><span class="glyphicon glyphicon-asterisk" style="color:red"></span> Region</label>
          <select class="form-control" name="hospitalRegion">
            <option value="">--Select Region--</option>
            <?php
            $fetchregion = mysqli_query($con, "SELECT * FROM tblregion");

            while ($row = mysqli_fetch_array($fetchregion)) {
              $id = $row['regionID'];
              $name = $row['regionName'];

              echo "<option value=\"$id\">$name</option>";
            }
            ?>
          </select>
        </div>

        <div class="form-group col-xs-6">
          <label><span class="glyphicon glyphicon-asterisk" style="color:red"></span> Hospital Coordinator</label>
          <select class="form-control coordinator" id="coordinator" name="hospitalCoordinator">

          </select>
        </div>

        <div class="form-group col-xs-12">
          <label>Contact Details</label>
          <input type="text" class="form-control telephone" name="hospitalTelephone"  placeholder="Enter Telephone No." readonly>
          <input type="text" class="form-control mobile" name="hospitalMobile"  placeholder="Enter Mobile No." readonly>
          <input type="text" class="form-control email" name="hospitalEmail" placeholder="Enter Email Address" readonly> <!-- Gagawin palang -->
        </div>

        <!-- <div class="form-group col-xs-4">
          <?php
            $entry = date('Y-m-d');
          ?>
          <label><span class="glyphicon glyphicon-asterisk" style="color:red"></span> Entry Date</label>
          <input id="hospitalEffectivityDate" value="<?php echo $entry ?>" type="date" class="form-control" name="hospitalEffectivityDate" disabled>
        </div> -->

        <div class="form-group col-xs-6">
          <label><span class="glyphicon glyphicon-asterisk" style="color:red"></span> Hospital Specification</label>
          <div class="radio">
            <label>
              <input type="radio" name="hospitalSpecification" value="Major">
              Major
            </label>&nbsp;&nbsp;
            <label>
              <input type="radio"  name="hospitalSpecification"  value="Minor">
              Minor
            </label>
          </div>
        </div>

        <div class="form-group col-xs-6">
          <label><span class="glyphicon glyphicon-asterisk" style="color:red"></span> Status</label>
          <div class="radio">
            <label>
              <input type="radio" name="status" value="Active" checked>
              Active
            </label>&nbsp;&nbsp;
            <label>
              <input type="radio"  name="status"  value="Inactive" disabled>
              Inactive
            </label>
          </div>
        </div>

        <div class="form-group col-xs-6">
          <label><span class="glyphicon glyphicon-asterisk" style="color:red"></span> Contract Specification</label>
          <div class="radio" align="center">
            <label>
              <input type="radio" class="open_ended" name="contract" value="Open End" checked>
              Open End
            </label>
            <label>
              <input type="radio" class="non_permanent" name="contract">
              Specific Date
            </label>
          </div>
        </div>

        <div class="form-group col-xs-6">
          <p>End of Contract</p>
          <input type="date" class="form-control" id="end" name="contract" disabled>
        </div>

      </div>
      <div class="modal-footer">
        <p style="color: red; font-style: italic">Note: All fields with <span class="glyphicon glyphicon-asterisk" style="color:red"></span> are Required</p>
        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal" name="btnCancel" onclick="reset()">Close</button>
        <input type="submit" class="btn btn-success" name="btnCreate" value="Create">
      </form>
      </div>
    </div>
  </div>
</div>

<?php

if(isset($_POST['btnCreate'])){
  require 'parts/php/post/contract/hospital/btnCreate.php';
  require 'parts/modals/contract/hospital/generate.php';
}

?>


<script src="plugins/input-mask/jquery.inputmask.js"></script>
<script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>

<script>

$("[data-mask]").inputmask();

$(".open_ended").click(function(){

    $("input[id=end]").prop('disabled', true);
    $("input[id=notify]").prop('disabled', true);


});

$(".non_permanent").click(function(){

    $("input[id=end]").prop('disabled', false);
    $("input[id=notify]").prop('disabled', false);


});

function Coordinator(){
  $('.coordinator').empty();
  $('.coordinator').append("<option>Loading....</option>");

  $.ajax({
    type: "POST",
    url: "coordinator.php",
    contentType: "application/json; charset=utf-8",
    dataType: "json",
    success: function(data){
      $('.coordinator').empty();
      $('.coordinator').append("<option value = 'None'>-Select Coordinator-</option>");
      $.each(data,function(i,item){
        $('.coordinator').append('<option value = "'+ data[i].id+'|'+data[i].name +'">'+ data[i].name +'</option>');
  });
},
complete: function(){

}
});
}

function Contact(contact){
$('.telephone').empty();
$('.mobile').empty();
$('.email').empty();

if (contact != "None") {
$.ajax({
  type: "POST",
  url: "contact.php?contact="+contact,
  contentType: "application/json; charset=utf-8",
  dataType: "json",
  success: function(data){
    $('.telephone').empty();
    $('.mobile').empty();
    $('.email').empty();

    $.each(data,function(i,item){
      $('.telephone').val(data[i].telephone);

      $('.mobile').val(data[i].mobile);

      $('.email').val(data[i].email);

    });
  },
    complete: function(){
    }
    });
  }
  else {
    $('.telephone').val('');
    $('.mobile').val('');
    $('.email').val('');
  }
    }

$(document).ready(function(){
Coordinator();
$(".coordinator").change(function(){
  var coordinatorID = $(".coordinator").val();
  Contact(coordinatorID);
});
});

</script>
