<?php
$result = mysqli_query($con,"SELECT * FROM tblstandard");
  while ($row = mysqli_fetch_array($result)) { ?>
  <div class="modal fade modal-warning" id="retrieveStandard<?php echo $row['standardID']; ?>" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content" style="margin-top: 10em; margin-left: 3em">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Retrieve Standard Service</h4>
        </div>
        <div class="modal-body">
          <form role="form" method="post">
          <p>Do You Want To Retrieve <?php echo $row['standardName']?> ?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger pull-left" data-dismiss="modal" name="btnCancel">Close</button>
          <input type="hidden"  name="id" value="<?php echo $row['standardID']?>">
          <input type="submit" class="btn btn-success" name="btnRetrieve" value="Retrieve">
        </form>
        </div>
      </div>
    </div>
  </div>
  <?php } ?>

  <?php

  if(isset($_POST['btnRetrieve'])){
    require 'parts/php/post/service/standard/btnRetrieve.php';
  }

  ?>
