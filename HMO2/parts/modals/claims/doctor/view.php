<?php

require 'parts/modals/claims/doctor/disapproved.php';


$result = mysqli_query($con,"SELECT * FROM tbldoctorclaim");
  while ($row = mysqli_fetch_array($result)) {
    $date = $row['claimDate'];
    $id = $row['claimID'];
    $name = $row['claimDoctorName'];
    $hospital = $row['claimHospitalName'];
    $address = $row['claimHospitalAddress'];
    $coordinator = $row['claimHospitalCoordinator'];
    ?>
<div class="modal fade" id="viewDoctorClaim<?php echo $id ?>" role="dialog" style="width: 100%" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="margin-top: 6em; margin-left: 3em">
      <form method="post" autocomplete="off">
      <div class="modal-header">
        <button class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">
          Doctor Claim Request
        </h4>
      </div>
      <div class="modal-body">
          <div class="form-group col-xs-12">
            <label>Date</label>
            <p><?php echo $date?></p>
          </div>

          <div class="form-group col-xs-6">
            <label>Doctor's Name</label>
            <p><?php echo $name?></p>
          </div>

          <div class="form-group col-xs-6">
            <label>Hospital/Clinic</label>
            <p><?php echo $hospital?></p>
          </div>


          <div class="form-group col-xs-6">
            <label>Hospital Address</label>
            <p><?php echo $address?></p>
          </div>

          <div class="form-group col-xs-6">
            <label>Hospital Coordinator</label>
            <p><?php echo $coordinator?></p>
          </div>

          <div class="form-group col-xs-12">
            <table class="table table-bordered">
              <tr>
                <th>Patient Name</th>
                <th>Service</th>
                <th>Amount</th>
              </tr>
              <?php
              $arrayName = array();
              $arrayServices = array();
              $arrayAmount = array();

              $result2 = mysqli_query($con, "SELECT d1.patientName, d1.patientServices, d1.patientAmount FROM tbldoctorpatient d1
                         INNER JOIN tbldoctorpatientclaim d2 ON d2.intPatientID=d1.patientID WHERE d2.intClaimID=$id");

              while ($row=mysqli_fetch_array($result2)) {
                $arrayName[]=$row['patientName'];
                $arrayServices[]=$row['patientServices'];
                $arrayAmount[]=$row['patientAmount'];
              }
                           echo '<tr>';
                           echo '<td>';
                           foreach ($arrayName as $key) {
                             echo "$key </br>";
                           }
                           echo '</td><td>';
                           foreach ($arrayServices as $key2) {
                             echo "$key2 </br>";
                           }
                           echo '</td><td>';

                           foreach ($arrayAmount as $key3) {
                             $nkey3 = number_format($key3,2);
                             echo "Php $nkey3 </br>";
                           }
                           $total = mysqli_query($con, "SELECT SUM(d2.patientAmount) as patientAmount, d2.patientID FROM tbldoctorpatient d2
                                     inner join tbldoctorpatientclaim d3 ON d3.intPatientID = d2.patientID
                                     inner join tbldoctorclaim d1 ON d1.claimID = d3.intClaimID
                                     where d1.claimID = '$id'");
                             while ($row = mysqli_fetch_array($total)) {
                               $fetchAmount = $row['patientAmount'];
                               $totalAmount = number_format($fetchAmount,2);
                               echo "</br><strong>Total</strong>: Php $totalAmount";
                             }
                           echo '</td>';
                           echo '</tr>';
              ?>
            </table>
          </div>

      </div>
      <div class="modal-footer">

        <input type="button" class="btn btn-danger pull-left" data-dismiss="modal" value="Close">

        <a class="btn btn pull-right">
          <input type="hidden"  name="id" value="<?php echo $id ?>">
          <input type="submit" class="btn btn-success" name="btnApproved" value="Approve">
        </a>

        <a href="#" data-toggle="modal" data-target="#disapproveDoctorClaim<?php echo $id ?>" class="btn btn pull-right">
          <button type="button" class="btn btn-warning pull-right">Disapprove</button>
        </a>

      </div>
      </form>
    </div>
  </div>
</div>
<?php } ?>


<?php

if (isset($_POST['btnApproved'])) {
  require 'parts/php/post/claims/doctor/btnApprove.php';
}

?>
