
  <div class="modal fade" id="newPlan" aria-hidden="true">
    <div class="modal-dialog" style="margin-top: 1em; width: 80%">
      <div class="modal-content">
        <div class="modal-header">
          <button class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">
            New Plan
          </h4>
        </div>

        <form id="planform" class="planform" method="post" action="" autocomplete="off">
        <div class="modal-body tabbable tab-content form-group">

          <div class="tab-pane active fadeInDown animated pageOne" id="pageOne">
            <div class="form-group col-xs-12">
              <label><span class="glyphicon glyphicon-asterisk" style="color:red;  font-size: 10px"></span> Plan Name</label>
              <input type="text" class="form-control" name="planName" placeholder="Enter Plan Name" >
            </div>

            <div class="form-group col-xs-12" align="center">
              <label>Choose Service(s)</label>
            </div>

            <div class="form-group col-xs-6">
              <div class="form-group col-xs-12" align="center">
                <label><span class="glyphicon glyphicon-asterisk" style="color:red;  font-size: 10px"></span> Standard Service</label>
              </div>
            <div class="box" style="overflow:auto; height: 270px">
              <div class="box-body" style="overflow-x: hidden">
                <table id="standard" class="table table-bordered table-striped table-hover table-responsive" width="100%">
                  <thead style="background-color: #428bca; color: white; text-shadow: 0px 0px 3px black;">
                  <tr>
                    <th>Standard Service</th>
                    <th>Coverage(s)</th>
                    <th>Select</th>
                  </tr>
                </thead>
                <tbody>
                  <?php

                $result = mysqli_query($con, "SELECT * FROM tblstandard
                          WHERE status = 'Active' ORDER by standardName ASC");

                $num = mysqli_num_rows($result);


                if($num > 0){
                while ($row = mysqli_fetch_array($result)) {

                  $id = $row['standardID'];
                  $name =  $row['standardName'];

                  $arrayCoverage = array();

                  $result2 = mysqli_query($con, "SELECT c1.coverageName, c1.status FROM tblcoverage c1
                             INNER JOIN tblStandardCoverage s1 ON s1.intCoverageID=c1.coverageID WHERE s1.intStandardID=$id
                             AND c1.status = 'Active'");

                  while ($row=mysqli_fetch_array($result2)) {
                    $arrayCoverage[]=$row['coverageName'];
                  }

                    echo '<tr>';
                    echo '<td>' . $name . '</td><td>';
                    foreach ($arrayCoverage as $key) {
                      echo "$key </br>";
                    }
                    echo '<td>
                            <input type="checkbox" name="standard[]" value="'.$id.'">
                          </td>';
                    echo '</tr>';
                  }
                }


            ?>

            </tbody>
                </table>
              </div>
            </div>
          </div>

          <div class="form-group col-xs-6">
            <div class="form-group col-xs-12" align="center">
              <label>Additional Service</label>
            </div>
            <div class="box" style="overflow:auto; height: 270px">
              <div class="box-body" style="overflow-x: hidden">
                <table id="additional" class="table table-bordered table-striped table-hover table-responsive" width="100%">
                <thead style="background-color: #428bca; color: white; text-shadow: 0px 0px 3px black;">
                  <tr>
                    <th>Additional Service</th>
                    <th>Coverage(s)</th>
                    <th>Select</th>
                  </tr>
                </thead>
                <tbody>
                  <?php

                $result = mysqli_query($con, "SELECT * FROM tbladditional
                          WHERE status = 'Active' ORDER by additionalName ASC");

                $num = mysqli_num_rows($result);

                // if($num > 0){
                while ($row = mysqli_fetch_array($result)) {

                  $id = $row['additionalID'];
                  $name =  $row['additionalName'];

                  $arrayCoverage = array();

                  $result2 = mysqli_query($con, "SELECT c1.coverageName FROM tblcoverage c1
                             INNER JOIN tbladditionalcoverage a1 ON a1.intCoverageID=c1.coverageID WHERE a1.intAdditionalID=$id");

                  while ($row=mysqli_fetch_array($result2)) {
                    $arrayCoverage[]=$row['coverageName'];
                  }

                    echo '<tr>';
                    echo '<td>' . $name . '</td><td>';
                    foreach ($arrayCoverage as $key) {
                      echo "$key </br>";
                    }
                    echo '<td>
                            <input type="checkbox" name="addon[]" value="'.$id.'">
                          </td>';
                    echo '</tr>';
                  }
                // }


            ?>
            </tbody>
                </table>
              </div>
            </div>
          </div>

          <div class="form-group col-xs-12">
            <p class="pull-right" style="color: red; font-size: 15px; font-style: italic">Note: All fields with <span class="glyphicon glyphicon-asterisk" style="color:red;  font-size: 10px"></span> are Required</p>
          </div>

            <a href="#pageTwo" data-toggle="tab" class="btn btn pull-right">
              <button id="firstbutton" type="button" class="btn btn-primary pull-right firstbutton1">Next</button>
            </a>

          <a href="#" class="btn btn pull-left">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </a>
          </div>

          <div class="tab-pane fadeInDown animated pageTwo" id="pageTwo">

            <div class="form-group col-xs-12" align="center">
              <label>Pre Existing Condition</label>
            </div>

            <div class="form-group col-xs-12">
              <div class="box" style="overflow:auto; height: 300px">
                <div class="box-body" style="overflow-x: hidden">
                  <table id="pec" class="table table-bordered table-striped table-hover table-responsive" width="100%">
                    <thead style="background-color: #428bca; color: white; text-shadow: 0px 0px 3px black;">
                    <tr>
                      <th>Pre Existing Condition</th>
                      <th>Description</th>
                      <th>Select</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php

              $result = mysqli_query($con,"SELECT * FROM tblpec
                        WHERE status='Active' ORDER by pecName ASC");

              $num = mysqli_num_rows($result);

              if($num > 0){
                  while ($row = mysqli_fetch_array($result)) {

                    $name =  $row['pecName'];
                    $desc =  $row['pecDesc'];
                    $id = $row['pecID'];

                      echo '<tr>';
                      echo '<td>' . $name . '</td>';
                      echo '<td>' . $desc . '</td>';
                      echo '<td>
                              <input type="checkbox" name="pec[]" value="'.$id.'">
                            </td>';
                      echo '</tr>';

                  }
                }

              ?>
              </tbody>
                  </table>
                </div>
              </div>

            </div>

            <div class="form-group col-xs-12">
              <p class="pull-right" style="color: red; font-size: 15px; font-style: italic">Note: This field is Optional</p>
            </div>

            <a href="#pageThree" data-toggle="tab" class="btn btn pull-right">
              <button id="secondbutton" type="button" class="btn btn-primary pull-right secondbutton1">Next</button>
            </a>

          <a href="#pageOne" data-toggle="tab" class="btn btn pull-left">
            <button id="firstback" type="button" class="btn btn-danger firstback1">Back</button>
          </a>

          </div>

          <div class="tab-pane fadeInDown animated pageThree" id="pageThree">

            <div class="form-group col-xs-12">
              <div class="form-group col-xs-12" align="center">
                <label><span class="glyphicon glyphicon-asterisk" style="color:red;  font-size: 10px"></span> Membership Type</label>
              </div>
              <div class="box" style="overflow:auto; height: 240px">
                <div class="box-body" style="overflow-x: hidden">
                  <table id="membership" class="table table-bordered table-striped table-hover table-responsive" width="100%">
                    <thead style="background-color: #428bca; color: white; text-shadow: 0px 0px 3px black;">
                    <tr>
                      <th>Membership Type Name</th>
                      <th>Description</th>
                      <th>Select</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php

              $result = mysqli_query($con,"SELECT * FROM tblmembershiptype WHERE status='Active'
                        ORDER by membershipName ASC");

                  $num = mysqli_num_rows($result);

              if($num > 0 ){
                  while ($row = mysqli_fetch_array($result)) {

                      $name = $row['membershipName'];
                      $desc = $row['membershipDesc'];
                      $id = $row['membershipID'];

                      echo '<tr>';
                      echo '<td>' . $name . '</td>';
                      echo '<td>' . $desc . '</td>';
                      echo '<td>
                            <input type="checkbox" name="membership[]" value="'.$id.'">
                            </td>';
                      echo '</tr>';

                }
              }
              ?>
              </tbody>
              </table>
              </div>
              </div>
          </div>

          <div class="form-group col-xs-12">

            <div class="form-group col-xs-6">
              <label><span class="glyphicon glyphicon-asterisk" style="color:red;  font-size: 10px"></span> Maximum Benefit Limit</label>
              <input type="text" class="form-control planMaximum" name="planMaximum" id="planMaximum">
            </div>

            <div class="form-group col-xs-6">
              <label>Annual Payment</label>
              <input type="text" class="form-control planAnnual" id="planAnnual" name="planAnnual" >
            </div>

            <div class="col-xs-6">
            <label><span class="glyphicon glyphicon-asterisk" style="color:red;  font-size: 10px"></span> Hospital Type</label>
            <div class="radio">
              <?php

              $resultType = mysqli_query($con,"SELECT * FROM tblhospitaltype");

                  $num = mysqli_num_rows($result);

              if($num > 0 ){
                  while ($row = mysqli_fetch_array($resultType)) {

                      $hospitalType = $row['hospitalType'];
                      $hospitalTypeID = $row['hospitalTypeID'];

                      echo "<label>";
                      echo '<input type="checkbox" name="hospital[]" value="'.$hospitalTypeID.'">&nbsp;&nbsp';
                      echo "$hospitalType";
                      echo "</label>";

                }
              }

              ?>
            </div>
          </div>

          <div class="form-group col-xs-6">
            <label><span class="glyphicon glyphicon-asterisk" style="color:red;  font-size: 10px"></span> Status</label>
            <div class="radio">
              <label>
                <input type="radio" name="status" value="Active" checked>
                Active
              </label>&nbsp;&nbsp;&nbsp;
              <label>
                <input type="radio"  name="status"  value="Inactive" disabled>
                Inactive
              </label>
            </div>
          </div>

          </div>

          <div class="form-group col-xs-12">
            <p class="pull-right" style="color: red; font-size: 15px; font-style: italic">Note: All fields with <span class="glyphicon glyphicon-asterisk" style="color:red;  font-size: 10px"></span> are Required</p>
          </div>

          <a href="#" class="btn btn pull-right">
            <input type="submit" name="btnCreate" value="Create" class="btn btn-success pull-right">
          </a>

        <a href="#pageTwo" data-toggle="tab" class="btn btn pull-left">
          <button id="secondback" type="button" class="btn btn-danger secondback1">Back</button>
        </a>

      </div>
<!--



                <div class="form-group col-xs-4">
                  <label><span class="glyphicon glyphicon-asterisk" style="color:red"></span> Plan Amount Limit</label>
                  <input type="text" class="form-control planMaximum" name="planMaximum" id="planMaximum">
                </div>

                <div class="form-group col-xs-4">
                  <label><span class="glyphicon glyphicon-asterisk" style="color:red"></span> Payment Duration</label>
                  <input type="text" class="form-control planDuration" name="planDuration" placeholder="In Years">
                </div>

                <div class="form-group col-xs-4">
                  <label><span class="glyphicon glyphicon-asterisk" style="color:blue"></span> Annual Payment</label>
                  <input type="text" class="form-control planAnnual" id="planAnnual" name="planAnnual" >
                </div>

                <div class="form-group col-xs-6">
                  <label><span class="glyphicon glyphicon-asterisk" style="color:red"></span> Major Hospital</label>
                  <div class="radio">
                    <label>
                      <input type="radio" name="major" value="Included">
                     Included
                   </label>&nbsp;&nbsp;&nbsp;
                    <label>
                      <input type="radio"  name="major"  value="Not Included">
                     Not Included
                    </label>
                  </div>
                </div>

                <div class="form-group col-xs-6">
                  <label><span class="glyphicon glyphicon-asterisk" style="color:red"></span> Status</label>
                  <div class="radio">
                    <label>
                      <input type="radio" name="status" value="Active" checked>
                      Active
                    </label>&nbsp;&nbsp;&nbsp;
                    <label>
                      <input type="radio"  name="status"  value="Inactive" disabled>
                      Inactive
                    </label>
                  </div>
                </div>-->

        </div>
        <div class="modal-footer">
          <!-- <button type="button" class="btn btn-danger pull-left" data-dismiss="modal" name="btnCancel">Close</button>
          <input type="submit" class="btn btn-success" name="btnCreate" value="Create" > -->
        </form>
        </div>
      </div>
    </div>
  </div>

  <?php

  if(isset($_POST['btnCreate'])){

    require 'parts/php/post/plan/btnCreate.php';

  }

  ?>

  <script src="plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="plugins/datatables/dataTables.bootstrap.min.js"></script>


<script>

$(function () {

  $("#standard").DataTable({
    "lengthChange": true
  });

  $("#additional").DataTable({
    "lengthChange": true
  });

  $("#pec").DataTable({
    "lengthChange": true
  });

  $("#membership").DataTable({
    "lengthChange": true
  });

});

// $(document).ready(function(){
//
//     $(".planMaximum").keyup(function(){
//       calculatePayment();
//     });
//
//     $(".planDuration").keyup(function(){
//       calculatePayment();
//     });
//
// });


// function calculatePayment(){
//
//   // var value = document.getElementById("percentage").value;
//   // var split = value.split("|");
//   // var percent = split['1'];
//   var annual =  parseFloat($('.planMaximum').val()) / parseFloat($('.planDuration').val());
//   // var addedPercentage = firstAnnual * (parseFloat(percent) / 100);
//   // var totalAnnual = firstAnnual + addedPercentage;
//
//   document.getElementById('planAnnual').value = annual;
//
//         $('#planAnnual').slideDown('fast');
//
//         $('#planAnnual').on('change',function(){
//           console.log('Change event.');
//           var val = $('#planAnnual').val();
//           $('#the_number').text( val !== '' ? val : '(empty)' );
//         });
//
//         $('#planAnnual').change(function(){
//           console.log('Second change event...');
//         });
//
//         $('#planAnnual').number( true, 2 );
// }

</script>

<!-- ADDING COMMAS IN INPUT FIELDS -->
    <script type="text/javascript" src="plugins/comma/jquery.number.js"></script>
    <script type="text/javascript">

      $(function(){
        // Set up the number formatting.

        $('#number_container').slideDown('fast');

        $('#planMaximum').on('change',function(){
          console.log('Change event.');
          var val = $('#planMaximum').val();
          $('#the_number').text( val !== '' ? val : '(empty)' );
        });

        $('#planMaximum').change(function(){
          console.log('Second change event...');
        });

        $('#planMaximum').number( true, 2 );


        // Get the value of the number for the demo.
        $('#get_number').on('click',function(){

          var val = $('#planMaximum').val();

          $('#the_number').text(  );
        });

                $('#planAnnual').slideDown('fast');

                $('#planAnnual').on('change',function(){
                  console.log('Change event.');
                  var val = $('#planAnnual').val();
                  $('#the_number').text( val !== '' ? val : '(empty)' );
                });

                $('#planAnnual').change(function(){
                  console.log('Second change event...');
                });

                $('#planAnnual').number( true, 2 );

      });
    </script>
    <!-- END -->
