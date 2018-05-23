<div class="container-fluid" style="margin-bottom: 15px">
  <div class="col-xs-6" align="left">
    <?php
      require 'parts/modals/utilities/employee/new.php';
    ?>
    <button data-target="#newEmployee" data-toggle="modal" class="btn btn-success btn-md">
      New <span class="glyphicon glyphicon-plus"></span></button>
  </div>
  <div class="col-xs-6" align="center">
    <form role="form" class="form-inline" method="post" autocomplete="off">

      <div class="form-group">
                Status:&nbsp;
                    <select name="status" class="form-control">
                      <?php

                      $status = isset($_POST['status'])? $_POST['status'] : "Active";

                      if($status == "Active"){

                        $active = "selected";
                        $inactive = "";

                      }else{

                        $active = "";
                        $inactive = "selected";

                      }
                    ?>
                        <option value="Active" <?php echo "$active";?>>Active</option>
                        <option value="Inactive" <?php echo "$inactive";?>>Inactive</option>
                      </select>&nbsp;&nbsp;

                      Employee Type:&nbsp;
                          <select name="type" class="form-control">
                            <?php

                            $type = isset($_POST['type'])? $_POST['type'] : "Admin";

                            $admin = "";
                            $coordinator = "";


                            if($type == "Admin"){

                              $admin = "selected";

                            }else{

                              $coordinator = "selected";

                            }
                          ?>
                              <option value="Admin" <?php echo "$admin";?>>Admin</option>
                              <option value="Coordinator" <?php echo "$coordinator";?>>Coordinator</option>
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
