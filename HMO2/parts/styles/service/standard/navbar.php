<div class="container-fluid" style="margin-bottom: 15px">
  <div class="col-xs-6" align="left">
    <button data-target="#newStandard" data-toggle="modal" class="btn btn-success btn-md">
      New <span class="glyphicon glyphicon-plus"></span></button>
      <?php
      require 'parts/modals/service/standard/new.php';
      ?>
  </div>
<div class="col-xs-6" align="right">
  <form role="form" class="form-inline" method="post" action="maintenance-standard.php" autocomplete="off">

    <div class="form-group">
              Status:&nbsp;
                  <select name="filter" class="form-control">
                    <?php

                    if(empty($_GET['page'])){
                        $currentpage = 1;
                      }else{
                        $currentpage = $_GET['page'];
                      }

                      if($currentpage == "" || $currentpage == "1"){
                        $limit = 0;
                      }else{
                        $limit = ($currentpage*10)-10;
                      }

                    $status = isset($_POST['filter'])? $_POST['filter'] : "Active";
                    $search = isset($_POST['search'])? $_POST['search'] : "";
                    $currentpage = 1;

                    if($status=="Active"){
                      $active = "selected";
                      $inactive = "";
                    }else{
                      $active = "";
                      $inactive = "selected";
                    }
                  ?>
                      <option value="Active" <?php echo "$active";?>>Active</option>
                      <option value="Inactive" <?php echo "$inactive";?>>Inactive</option>
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
