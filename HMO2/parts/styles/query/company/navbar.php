<div class="container-fluid" style="margin-bottom: 15px">
<div class="col-xs-12" align="center">
  <form role="form" class="form-inline" method="post" autocomplete="off">

    <div class="form-group " >

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
              <option value="None" <?php echo "$none";?>>--Select Contract Specification--</option>
              <option value="Open Ended" <?php echo "$openEnded";?>>Open Ended</option>
              <option value="Non Permanent" <?php echo "$nonPerma";?>>Non-Permanent</option>
            </select>&nbsp;&nbsp;

                    <div class="input-group">
                      <input type="submit" class="btn btn-primary" name="btnSearch" value="Go"/>
                    </div>
                  </div>
                </form>
</div>
</div>
