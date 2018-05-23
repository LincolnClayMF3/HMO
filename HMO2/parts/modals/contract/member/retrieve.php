<?php
$result = mysqli_query($con,"SELECT * FROM tblmembertransaction");
  while ($row = mysqli_fetch_array($result)) { ?>
  <div class="modal fade modal-warning" id="retrieveMember<?php echo $row['memberTransID']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content" style="margin-top: 10em; margin-left: 3em">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Retrieve Member</h4>
        </div>
        <div class="modal-body">
          <form role="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
          <p>Do You Want To Retrieve Record of <?php echo $row['memberTransName']?> ?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger pull-left" data-dismiss="modal" name="btnCancel">Close</button>
          <input type="hidden"  name="id" value="<?php echo $row['memberTransID']?>">
          <input type="submit" class="btn btn-success" id="delete" name="btnRetrieve" value="Retrieve" onclick="Retrieve()">
        </form>
        </div>
      </div>
    </div>
  </div>
  <?php } ?>

  <?php

if(isset($_POST['btnRetrieve'])){
  require 'parts/php/post/contract/member/btnRetrieve.php';
}

  ?>

<script>

function Retrieve() {
   alert("Retrieved Successfully");
}

</script>
