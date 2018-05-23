<div class="container-fluid" style="margin-bottom: 15px">
<div class="col-xs-12" align="center">
  <form role="form" class="form-inline" method="post" autocomplete="off">

    <div class="form-group " >

      Region:&nbsp;
          <select name="region" class="form-control">
            <?php

            $region = isset($_POST['region'])? $_POST['region'] : "None";

          ?>
              <option value="None" selected>All</option>
              <?php
              $fetchregion = mysqli_query($con, "SELECT * FROM tblregion");

              while ($row = mysqli_fetch_array($fetchregion)) {
                $regionName = $row['regionName'];

                $regionSelected = "";

                if($region == $regionName){
                  $regionSelected = "selected";
                }

                echo "<option value=\"$regionName\" $regionSelected>$regionName</option>";
              }
              ?>
            </select>&nbsp;&nbsp;

            Contract Specification:&nbsp;
                <select name="specs" class="form-control">
                  <?php

                  $specs = isset($_POST['specs'])? $_POST['specs'] : "None";
                  $currentpage = 1;

                  $openEnded = "";
                  $nonPerma = "";
                  $none = "";

                  if($specs == "Open Ended"){
                    $openEnded = "selected";
                  }
                  elseif ($specs == "Non Permanent") {
                    $nonPerma = "selected";
                  }
                  else {
                    $none = "selected";
                  }
                ?>
                    <option value="None" <?php echo "$none";?>>All</option>
                    <option value="Open Ended" <?php echo "$openEnded";?>>Open End</option>
                    <option value="Non Permanent" <?php echo "$nonPerma";?>>Specific Date</option>
                  </select>&nbsp;&nbsp;

                    <div class="input-group">
                      <input type="submit" class="btn btn-primary" name="btnSearch" value="Go"/>
                    </div>
                  </div>
                </form>
</div>
</div>
