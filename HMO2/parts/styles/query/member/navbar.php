<div class="container-fluid" style="margin-bottom: 15px">
<div class="col-xs-12" align="center">
  <form role="form" class="form-inline" method="post" autocomplete="off">

    <div class="form-group " >

      Membership Type:&nbsp;
          <select name="type" class="form-control">
            <?php

            $type = isset($_POST['type'])? $_POST['type'] : "None";

          ?>
              <option value="None" selected>--Select Membership Type--</option>
              <?php
              $fetchtype = mysqli_query($con, "SELECT * FROM tblmembershiptype WHERE status = 'Active' ORDER BY membershipName ASC");

              while ($row = mysqli_fetch_array($fetchtype)) {
                $membershipName = $row['membershipName'];

                $membershipSelected = "";

                if($type == $membershipName){
                  $membershipSelected = "selected";
                }

                echo "<option value=\"$membershipName\" $membershipSelected>$membershipName</option>";
              }
              ?>
            </select>&nbsp;&nbsp;

            Plan:&nbsp;
                <select name="plan" class="form-control">
                  <?php

                  $plan = isset($_POST['plan'])? $_POST['plan'] : "None";

                ?>
                    <option value="None" selected>--Select Plan--</option>
                    <?php
                    $fetchplan = mysqli_query($con, "SELECT * FROM tblplan WHERE status = 'Active' ORDER BY planName ASC");

                    while ($row = mysqli_fetch_array($fetchplan)) {
                      $planName = $row['planName'];

                      $planSelected = "";

                      if($plan == $planName){
                        $planSelected = "selected";
                      }

                      echo "<option value=\"$planName\" $planSelected>$planName</option>";
                    }
                    ?>
                  </select>&nbsp;&nbsp;

                    <div class="input-group">
                      <input type="submit" class="btn btn-primary" name="btnSearch" value="Go"/>
                    </div>
                  </div>
                </form>
</div>
</div>
