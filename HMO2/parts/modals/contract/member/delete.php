<?php
$result = mysqli_query($con,"SELECT * FROM tblmembertransaction");
  while ($row = mysqli_fetch_array($result)) {

    $id = $row['memberTransID'];
    $name = $row['memberTransName'];

    ?>
  <div class="modal fade modal-danger" id="terminateMember<?php echo $id ?>" style="z-index:1051" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content" style="margin-top: 10em; margin-left: 3em">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Delete Member</h4>
        </div>
        <div class="modal-body">
          <form role="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
          <p>Do You Want To Delete Record of <?php echo $name?> ?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-warning pull-left" data-dismiss="modal" name="btnCancel">Close</button>
          <a href="#" data-toggle="modal" data-target="#terminateContract<?php echo $id?>" >
          <input type="button" class="btn btn-success" name="btnYes" value="Yes">
        </a>
        </form>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="terminateContract<?php echo $id ?>" style="z-index:1051" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content" style="margin-top: 14em; margin-left: 3em">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Termination Of Contract</h4>
        </div>
        <div class="modal-body">

          <form role="form" method="post" autocomplete="off">

          <div class="col-xs-12">
            <p style="color: red; font-style: italic">Are you sure you want to Terminate contract of <?php echo $name ?> ?</p>
          </div>

          <div class="form-group col-xs-6">
            <label>Reason of Termination</label>
            <textarea class="form-control" name="reason" style="height: 150px"></textarea>
          </div>

          <div class="form-group col-xs-6">
            <label>Terminated By</label>
            <input type="text" class="form-control" name="terminator" value="<?php echo $fullName?>" readonly></br>

            <label>Date Terminated</label>
            <?php

            $currentDate = date('Y-m-d');

            ?>
            <input type="date" class="form-control" name="terminationDate" value="<?php echo $currentDate?>" readonly>
          </div>

        </div>
        <div class="modal-footer">

          <div class="col-xs-12">
            <button type="button" class="btn btn-danger pull-left" data-dismiss="modal" name="btnCancel">Close</button>
            <input type="hidden"  name="id" value="<?php echo $id ?>">
            <input type="submit" class="btn btn-success" name="btnDelete" value="Terminate">
        </div>

      </form>
        </div>
      </div>
    </div>
  </div>
  <?php } ?>

  <?php

if(isset($_POST['btnDelete'])){
  require 'parts/php/post/contract/member/btnDelete.php';
}

  ?>

<script>

function Delete() {
   alertify.alert("Deleted Successfully");
}

</script>
