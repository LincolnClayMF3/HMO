<div class="container-fluid" style="margin-bottom: 15px">
  <div class="col-xs-4" align="left">
    <button data-target="#newCompany" data-toggle="modal" class="btn btn-success btn-md">
      New <span class="glyphicon glyphicon-plus"></span></button>
      <?php

      require 'parts/modals/contract/company/new.php';

      ?>
  </div>
<div class="col-xs-8" align="right">
  <form role="form" class="form-inline" method="post" autocomplete="off">

    <div class="form-group">
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

                    $statusFilter = isset($_POST['status'])? $_POST['status'] : "Active";

                    $active = "";
                    $inactive = "";
                    $expired = "";

                    if($statusFilter == "Active"){
                      $active = "selected";
                    }
                    elseif($statusFilter == "Inactive"){
                      $inactive = "selected";
                    }
                    else{
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
