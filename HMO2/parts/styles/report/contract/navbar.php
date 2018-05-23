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
        </select>&nbsp;&nbsp;</br></br>
      <!-- </div>

        <div class="form-group col-xs-4"> -->
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
      Contracts:&nbsp;&nbsp;
      <select id="contract" name="contract" class="form-control contract" style="width: 150px">
        <?php

        $contract = isset($_POST['contract'])? $_POST['contract'] : "None";

        $member = "";
        $company = "";
        $hospital = "";
        $none = "";

        if($contract == "Member"){
          $member = "selected";
        }
        elseif ($contract == "Company") {
          $company = "selected";
        }
        elseif ($contract == "Hospital") {
          $hospital = "selected";
        }
        else {
          $none = "selected";
        }
      ?>
          <option value="None" <?php echo "$none";?>>All</option>
          <option value="Company" <?php echo "$company";?>>Company</option>
          <option value="Hospital" <?php echo "$hospital";?>>Hospital</option>
          <option value="Member" <?php echo "$member";?>>Member</option>
        </select></br></br>

        Status:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <select id="status" name="status" class="form-control status" style="width: 150px">
          <?php

          $status = isset($_POST['status'])? $_POST['status'] : "Active";

          $active = "";
          $expired = "";
          $inactive = "";
          $none = "";

          if($status == "Active"){
            $active = "selected";
          }
          elseif ($status == "Expired") {
            $expired = "selected";
          }
          elseif ($status == "Terminated") {
            $inactive = "selected";
          }
        ?>
            <option value="Active" <?php echo "$active";?>>Active</option>
            <option value="Expired" <?php echo "$expired";?>>Expired</option>
            <option value="Terminated" <?php echo "$inactive";?>>Terminated</option>
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
