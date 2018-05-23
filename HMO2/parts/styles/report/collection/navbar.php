<div class="container-fluid" style="margin-bottom: 15px">
<div class="col-xs-12" align="center">
  <form role="form" class="form-inline" method="post" autocomplete="off">

    <div class="form-group">
      View By:&nbsp;&nbsp;
      <select id="display" name="display" class="form-control display">
        <?php

        $display = isset($_POST['display'])? $_POST['display'] : "Statistical";

        $tabular = "";
        $statistical = "";

        if($display == "Tabular"){
          $tabular = "selected";
        }
        elseif ($display == "Statistical") {
          $statistical = "selected";
        } "selected";

      ?>
          <option value="Tabular" <?php echo "$tabular";?>>Tabular</option>
          <option value="Statistical" <?php echo "$statistical";?>>Statistical</option>
        </select>&nbsp;&nbsp;

                    Frequency:&nbsp;&nbsp;
                        <select id="frequency" name="frequency" class="form-control frequency">
                          <?php

                          $frequency = isset($_POST['frequency'])? $_POST['frequency'] : "None";

                          $daily = "";
                          $weekly = "";
                          $monthly = "";
                          $yearly = "";
                          $specific = "";
                          $none = "";

                          if($frequency == "Daily"){
                            $daily = "selected";
                          }
                          elseif ($frequency == "Weekly") {
                            $weekly = "selected";
                          }
                          elseif ($frequency == "Monthly") {
                            $monthly = "selected";
                          }
                          elseif ($frequency == "Yearly") {
                            $yearly = "selected";
                          }
                          elseif ($frequency == "Specific") {
                            $specific = "selected";
                          }
                          else {
                            $none = "selected";
                          }
                        ?>
                            <option value="None" <?php echo "$none";?>>All</option>
                            <option value="Daily" <?php echo "$daily";?>>Today</option>
                            <option value="Weekly" <?php echo "$weekly";?>>This Week</option>
                            <option value="Monthly" <?php echo "$monthly";?>>This Month</option>
                            <option value="Yearly" <?php echo "$yearly";?>>This Year</option>
                            <option value="Specific" <?php echo "$specific";?>>Specific Date</option>
                          </select>&nbsp;&nbsp;&nbsp;

                          From: <input type="date" class="form-control" value="<?php echo isset($_POST['fromDate']) ? $_POST['fromDate'] : '' ?>" name="fromDate" disabled>&nbsp;&nbsp;
                          To: <input type="date" class="form-control" value="<?php echo isset($_POST['toDate']) ? $_POST['toDate'] : '' ?>" name="toDate" disabled>


                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <input type="submit" class="btn btn-primary" name="btnSearch" value="Go"/>
                    </div>
                  </div>
                </form>
</div>
</div>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="plugins/datepicker/bootstrap-datepicker.js"></script>

<script>

// $(document).ready(function () {
//
//     $('#fromDate').datepicker({
//         dateFormat: "dd-M-yy",
//         minDate: 0,
//         onSelect: function (date) {
//             var date2 = $('#fromDate').datepicker('getDate');
//             date2.setDate(date2.getDate() + 1);
//             $('#toDate').datepicker('setDate', date2);
//             //sets minDate to dt1 date + 1
//             $('#toDate').datepicker('option', 'minDate', date2);
//         }
//     });
//     $('#toDate').datepicker({
//         dateFormat: "dd-M-yy",
//         onClose: function () {
//             var fromDate = $('#fromDate').datepicker('getDate');
//             var toDate = $('#toDate').datepicker('getDate');
//             //check to prevent a user from entering a date below date of dt1
//             if (toDate <= fromDate) {
//                 var minDate = $('#toDate').datepicker('option', 'minDate');
//                 $('#toDate').datepicker('setDate', minDate);
//             }
//         }
//     });
// });

$(".frequency").change(function(){

  if ($("#frequency").val() == 'Specific'){
    $("input[name=fromDate]").prop('disabled', false);
    $("input[name=toDate]").prop('disabled', false);
  }
  else {
    $("input[name=fromDate]").prop('disabled', true);
    $("input[name=toDate]").prop('disabled', true);
  }

});
</script>
