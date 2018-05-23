<?php
$result = mysqli_query($con,"SELECT * FROM tblroom");
while ($row = mysqli_fetch_array($result)) {
  $type = $row['roomType'];
  $desc = $row['roomDesc'];
  $amount = $row['roomAmount'];
  $id = $row['roomID'];
  ?>
  <div class="modal fade" id="updateRoom<?php echo $id ?>" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content" style="margin-top: 7em; margin-left: 3em">
        <div class="modal-header">
          <button class="close" data-dismiss="modal" aria-hidden="true" onclick="reset()">&times;</button>
          <h4 class="modal-title">
            Edit Room
          </h4>
        </div>
        <div class="modal-body">
          <form class="updateroomform" role="form" method="post" autocomplete="off">

            <div class="form-group col-xs-12">
              <label><span class="glyphicon glyphicon-asterisk" style="color:red;  font-size: 10px"></span> Room Type</label>
              <input type="text" value="<?php echo $type?>" class="form-control" name="roomType" placeholder="Enter Room Type" required maxlength="40" onkeypress="return validateName(event)">
            </div>

            <div class="form-group col-xs-12">
              <label>Description</label>
              <textarea class="form-control" rows="3" placeholder="Enter Room Description"
                        name="roomDesc"><?php echo $desc?></textarea>
            </div>

            <div class="form-group col-xs-6">
              <label><span class="glyphicon glyphicon-asterisk" style="color:red;  font-size: 10px"></span> Room Amount</label>
              <input type="text" id="roomAmount<?php echo $id?>" class="form-control" value="<?php echo number_format($amount,2)?>"
                     placeholder="Enter Room Amount" name="roomAmount" onclick="commaformat(<?php echo $id?>)">
            </div>

            <div class="form-group col-xs-6">
              <label><span class="glyphicon glyphicon-asterisk" style="color:red;  font-size: 10px"></span> Status</label>
              <div class="radio">
                <label>
                  <input type="radio" name="status" value="Active" checked>
                  Active
                </label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio"  name="status"  value="Inactive">
                  Inactive
                </label>
              </div>
            </div>
        </div>
        <div class="modal-footer">
          <p style="color: red; font-style: italic">Note: All fields with <span class="glyphicon glyphicon-asterisk" style="color:red;  font-size: 10px"></span> are Required</p>
          <button type="button" class="btn btn-danger pull-left" data-dismiss="modal" name="btnCancel" onclick="reset()">Close</button>
          <input type="hidden"  name="id" value="<?php echo $id ?>">
          <input type="submit" class="btn btn-success" name="btnUpdate" value="Edit">
        </form>
        </div>
      </div>
    </div>
  </div>
<?php } ?>


<?php

if(isset($_POST['btnUpdate'])){
  require 'parts/php/post/room/btnUpdate.php';
}

?>
<!-- ADDING COMMAS IN INPUT FIELDS -->
    <script type="text/javascript" src="plugins/comma/jquery.number.js"></script>
    <script type="text/javascript">

    function commaformat(id){
        // Set up the number formatting.

        $('#number_container').slideDown('fast');

        $('#roomAmount'+id).on('change',function(){
          console.log('Change event.');
          var val = $('#roomAmount'+id).val();
          $('#the_number').text( val !== '' ? val : '(empty)' );
        });

        $('#roomAmount'+id).change(function(){
          console.log('Second change event...');
        });

        $('#roomAmount'+id).number( true, 2 );
}
</script>
