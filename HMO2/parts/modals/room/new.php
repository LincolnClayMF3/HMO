<div class="modal fade" id="newRoom" role="dialog" style="width: 100%" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="margin-top: 7em; margin-left: 3em">
      <div class="modal-header">
        <button class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">
          New Room
        </h4>
      </div>
      <div class="modal-body">
        <form class="roomform" role="form" method="post" autocomplete="off">

          <div class="form-group col-xs-12">
            <label><span class="glyphicon glyphicon-asterisk" style="color:red;  font-size: 10px"></span> Room Type</label>
            <input type="text" class="form-control" name="roomType" placeholder="Enter Room Type" required maxlength="40" onkeypress="return validateName(event)">
          </div>


          <div class="form-group col-xs-12">
            <label>Description</label>
            <textarea class="form-control" rows="3" placeholder="Enter Room Description" name="roomDesc"></textarea>
          </div>

          <div class="form-group col-xs-6">
            <label><span class="glyphicon glyphicon-asterisk" style="color:red;  font-size: 10px"></span> Room Amount</label>
            <input type="text" id="roomAmount" class="form-control" placeholder="Enter Room Amount" name="roomAmount">
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
                <input type="radio"  name="status"  value="Inactive" disabled>
                Inactive
              </label>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <p style="color: red; font-style: italic">Note: All fields with <span class="glyphicon glyphicon-asterisk" style="color:red;  font-size: 10px"></span> are Required</p>
        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal" name="btnCancel" onclick="reset()">Close</button>
        <input type="submit" class="btn btn-success" name="btnCreate" value="Create">
      </form>
      </div>
    </div>
  </div>
</div>

<?php

if(isset($_POST['btnCreate'])){
  require 'parts/php/post/room/btnCreate.php';

}

?>

<script type="text/javascript" src="plugins/comma/jquery.number.js"></script>
<script>

$(function(){

  $('#roomAmount').slideDown('fast');

  $('#roomAmount').on('change',function(){
    console.log('Change event.');
    var val = $('#roomAmount').val();
    $('#the_number').text( val !== '' ? val : '(empty)' );
  });

  $('#roomAmount').change(function(){
    console.log('Second change event...');
  });

  $('#roomAmount').number( true, 2 );

});

</script>
