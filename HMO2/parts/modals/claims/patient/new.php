<div class="modal fade" id="newPatientClaims"  role="dialog" style="width: 100%" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content" style="margin-top: -1em; margin-left: 1em">
    <div class="modal-header">
      <button class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      <h4 class="modal-title">
        New Patient's Claim
      </h4>
    </div>

    <form class="patientclaimform" id="patientclaimform" role="form" method="post" autocomplete="off" enctype='multipart/form-data'>
    <div class="modal-body tabbable tab-content form-group">

        <div class="tab-pane active fadeInDown animated" id="patientDetails">
        <?php
        $current = date('Y-m-d');
        ?>

        <div class="form-group col-xs-6">
          <label><span class="glyphicon glyphicon-asterisk" style="color:red"></span> Patient's Name</label>

          <select class="form-control member select2" id="member" name="patientName" style="width: 100%">

          </select>

        </div>

        <div class="form-group col-xs-6">
          <label>Date</label>
          <input  type="text" class="form-control" name="dateSubmit" value="<?php echo $current ?>" readonly>
        </div>

        <div class="form-group col-xs-6">
          <label>Contact Number</label>
          <input type="text" class="form-control" id="contact" name="contactNumber" placeholder="Enter Contact Number" readonly>
        </div>

        <div class="form-group col-xs-6">
          <label>Card/ID Number</label>
          <input type="text" class="form-control" id="card" name="cardNumber" placeholder="Enter Card/ID Number" readonly>
        </div>

        <div class="form-group col-xs-6">
          <label>Hospital Coordinator</label>
          <input type="text" class="form-control" name="hospitalCoordinator" value="<?php echo $fullName?>" readonly>
        </div>

        <div class="form-group col-xs-6">
          <label>Hospital/Clinic Name</label>
          <?php

          $fetchHospital = mysqli_query($con, "SELECT * FROM tblhospitalmaintenance
                           WHERE hospitalMainCoordinator = '$fullName'");

                           while ($row = mysqli_fetch_array($fetchHospital)) {
                             $hospital = $row['hospitalMainName'];
                           }

          ?>
          <input type="text" class="form-control" name="hospitalName" value="<?php echo $hospital?>" readonly>
        </div>

        <div class="form-group col-xs-6">
          <label><span class="glyphicon glyphicon-asterisk" style="color:red"></span> Treatment Date</label>
          <input type="date" class="form-control" name="treatmentDate" placeholder="Enter Treatment Date">
        </div>

        <div class="form-group col-xs-6">
          <label><span class="glyphicon glyphicon-asterisk" style="color:red"></span> Amount</label>
          <input type="text" class="form-control" id="amountClaims" name="amountClaims" placeholder="Enter Amount" onclick="commaseparated(<?php echo $id?>)">
        </div>

        <div class="form-group col-xs-12">
          <label><span class="glyphicon glyphicon-asterisk" style="color:red"></span> Reason for Reimbursement</label>
          <textarea style="height: 100px" name="reason" class="form-control"></textarea>
        </div>

        <div class="form-group col-xs-12">
          <p style="color: red; font-style: italic" class="pull-right">Note: All fields with asterisk are Required</p>
        </div>

        <a href="#requirements" data-toggle="tab" class="btn btn pull-right">
          <button id="firstbutton" type="button" class="btn btn-primary firstbutton4">Next</button>
        </a>

      <a href="#" class="btn btn pull-left">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </a>


      </div>

      <div class="tab-pane fadeInDown animated" id="requirements">
        <div class="form-group col-xs-12">
          <label>Requirements</label>
          <?php
          require 'parts/php/connection.php';
          $requirement = mysqli_query($con, "SELECT * FROM tblrequirement WHERE requirementType = 'Patient Claim'");
          $ctr = 0;
          while($row = mysqli_fetch_array($requirement)){
            $id = $row['requirementID'];
            $filename = $row['requirementName'];
            $ctr++;
            echo "</br><span class=\"glyphicon glyphicon-asterisk\" style=\"color:red\">
            </span> $filename<input id=\"multiplephoto\" type=\"file\" class=\"form-control\" name=\"requirementFile[$ctr]\"></br>";


          }
          ?>
          <input type="hidden" value="<?php echo $filename?>" name="filename">
          <input type="hidden" value="<?php echo $ctr?>" name="numofreq">
        </div>

        <div class="form-group col-xs-12">
          <p style="color: red; font-style: italic" class="pull-right">Note: All fields with asterisk are Required</p>
        </div>

        <a href="#patientDetails" data-toggle="tab" class="btn btn pull-left">
          <button id="secondbutton" type="button" class="btn btn-danger firstback4">Back</button>
        </a>

        <a class="btn btn pull-right">
          <input type="submit" class="btn btn-success" name="btnSend" value="Submit">
        </a>

      </div>
    </div>
  </form>
    <div class="modal-footer">
    </div>
  </div>
</div>
</div>

<?php

if(isset($_POST['btnSend'])){

	require 'parts/php/post/claims/patient/btnSend.php';

}

?>

    <script type="text/javascript" src="plugins/comma/jquery.number.js"></script>
    <script src="plugins/select2/select2.full.min.js"></script>
    <!-- <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script> -->


    <script>

    $(function () {
        //Initialize Select2 Elements
        $(".select2").select2();
      });

      function commaseparated(id) {
        // Set up the number formatting.

        $('#number_container').slideDown('fast');

        $('#amountClaims').on('change',function(){
          console.log('Change event.');
          var val = $('#amountClaims').val();
          $('#the_number').text( val !== '' ? val : '(empty)' );
        });

        $('#amountClaims').change(function(){
          console.log('Second change event...');
        });

        $('#amountClaims').number( true, 2 );

      }

      function Member(){
        $('#member').empty();
        $('#member').append("<option>Loading....</option>");

        $.ajax({
          type: "POST",
          url: "member.php",
          contentType: "application/json; charset=utf-8",
          dataType: "json",
          success: function(data){
            $('#member').empty();
            $('#member').append("<option value = 'None'>-Select Member-</option>");
            $.each(data,function(i,item){
              $('#member').append('<option value = "'+ data[i].id+'|'+data[i].name +'">'+ data[i].name +'</option>');
        });
      },
      complete: function(){

      }
      });
      }

      function Details(member){
      $('#contact').empty();
      $('#card').empty();

      if (member != "None") {
      $.ajax({
        type: "POST",
        url: "memberDetails.php?member="+member,
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function(data){
          $('#contact').empty();
          $('#card').empty();

          $.each(data,function(i,item){
            $('#contact').val(data[i].contact);

            $('#card').val(data[i].card);

          });
        },
          complete: function(){
          }
          });
        }
        else {
          $('#contact').val('');
          $('#card').val('');
        }
          }

      $(document).ready(function(){
      Member();
      $("#member").change(function(){
        var memberID = $("#member").val();
        Details(memberID);
      });
      });


    </script>
