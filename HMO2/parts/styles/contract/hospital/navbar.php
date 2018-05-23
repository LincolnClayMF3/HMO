<div class="container-fluid" style="margin-bottom: 15px">
  <div class="col-xs-3" align="left">
    <button data-target="#newHospital" data-toggle="modal" class="btn btn-success btn-md">
      New <span class="glyphicon glyphicon-plus"></span></button>
      <?php

      require 'parts/modals/contract/hospital/new.php';

      ?>
  </div>
<div class="col-xs-9" align="right">
  <form role="form" class="form-inline" method="post">

    <div class="form-group">

      Region:&nbsp;
          <select name="region" class="form-control">
            <?php

            $regionFilter = isset($_POST['region'])? $_POST['region'] : "None";

          ?>
              <option value="None" selected>All</option>
              <?php
              $fetchregion = mysqli_query($con, "SELECT * FROM tblregion");

              while ($row = mysqli_fetch_array($fetchregion)) {
                $regionName = $row['regionName'];

                $regionSelected = "";

                if($regionFilter == $regionName){
                  $regionSelected = "selected";
                }

                echo "<option value=\"$regionName\" $regionSelected>$regionName</option>";
              }
              ?>
            </select>&nbsp;&nbsp;

            Contract Specification:&nbsp;
                <select name="specs" class="form-control">
                  <?php

                  $specsFilter = isset($_POST['specs'])? $_POST['specs'] : "None";

                  $openEnd = "";
                  $specific = "";
                  $none = "";

                  if($specsFilter == "Open End"){
                    $openEnd = "selected";
                  }
                  elseif ($specsFilter == "Specific") {
                    $specific = "selected";
                  }
                  else {
                    $none = "selected";
                  }
                ?>
                    <option value="None" <?php echo "$none";?>>All</option>
                    <option value="Open End" <?php echo "$openEnd";?>>Open End</option>
                    <option value="Specific" <?php echo "$specific";?>>Specific Date</option>
                  </select>&nbsp;&nbsp;

              Status:&nbsp;
                  <select name="status" id="status" class="form-control status">
                    <?php

                    $statusFilter  = isset($_POST['status'])? $_POST['status'] : "Active";

                    $active = "";
                    $inactive = "";
                    $expired = "";

                    if($statusFilter == "Active"){
                      $active = "selected";
                    }
                    elseif($statusFilter == "Inactive"){
                      $inactive = "selected";
                    }
                    else {
                      $expired = "selected";
                    }
                  ?>
                      <option value="Active" <?php echo "$active";?>>Active</option>
                      <option value="Expired" <?php echo "$expired";?>>Expired</option>
                      <option value="Inactive" <?php echo "$inactive";?>>Terminated</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <input type="submit" class="btn btn-primary" name="btnSearch" value="Go"/>
                    </div>
                  </div>
                </form>
</div>
</div>


<script>

$(".status").change(function(){

  if ($("#status").val() == 'Inactive'){
    $("select[name=specs]").prop('disabled', true);
  }
  else if($("#status").val() == 'Expired'){
    $("select[name=specs]").prop('disabled', true);
  }
  else {
    $("select[name=specs]").prop('disabled', false);
  }

});

</script>
