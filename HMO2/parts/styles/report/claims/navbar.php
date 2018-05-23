<div class="container-fluid" style="margin-bottom: 15px">
<div class="col-xs-12" align="left">
  <form role="form" class="form-inline" method="post" autocomplete="off">

    <div class="form-group col-xs-4">
      View By:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <select id="display" name="display" class="form-control display" style="width: 150px">
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
        </select>&nbsp;</br></br>

        Frequency:&nbsp;&nbsp;
            <select id="frequency" name="frequency" class="form-control frequency" style="width: 150px">
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
              </select>
        </div>

    <div class="form-group col-xs-4">
                    Type:&nbsp;&nbsp;&nbsp;
                        <select id="claimType" name="claimType" class="form-control claimType" style="width: 150px">
                          <?php

                          $claimType = isset($_POST['claimType'])? $_POST['claimType'] : "None";

                          $doctor = "";
                          $patient = "";
                          $none = "";

                          if($claimType == "Doctor"){
                            $doctor = "selected";
                          }
                          elseif ($claimType == "Patient") {
                            $patient = "selected";
                          }
                          else {
                            $none = "selected";
                          }
                        ?>
                            <option value="None" <?php echo "$none";?>>All</option>
                            <option value="Doctor" <?php echo "$doctor";?>>Doctor</option>
                            <option value="Patient" <?php echo "$patient";?>>Patient</option>
                          </select></br></br>

                          Status:&nbsp;
                          <select id="status" name="status" class="form-control status" style="width: 150px">
                            <?php

                            $status = isset($_POST['status'])? $_POST['status'] : "Approved";

                            $approved = "";
                            $disapproved = "";

                            if($status == "Approved"){
                              $approved = "selected";
                            }
                            else {
                              $disapproved = "selected";
                            }
                          ?>
                              <option value="Approved" <?php echo "$approved";?>>Approved</option>
                              <option value="Disapproved" <?php echo "$disapproved";?>>Disapproved</option>
                            </select>
                          </div>

                          <div class="form-group col-xs-4">
                          From: <input type="date" class="form-control" name="fromDate" value="<?php echo isset($_POST['fromDate']) ? $_POST['fromDate'] : '' ?>" disabled></br></br>

                          To: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" class="form-control" name="toDate" value="<?php echo isset($_POST['toDate']) ? $_POST['toDate'] : '' ?>" disabled>&nbsp;&nbsp;

                          <input type="submit" class="btn btn-primary" name="btnSearch" value="Go"/>
                          </div>
                </form>
</div>
</div>

<script>

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
