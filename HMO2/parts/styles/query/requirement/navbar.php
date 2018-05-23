<div class="container-fluid" style="margin-bottom: 15px">
<div class="col-xs-12" align="center">
  <form role="form" class="form-inline" method="post" autocomplete="off">

    <div class="form-group " >

      Requirement Type:&nbsp;
          <select name="reqType" class="form-control">
            <?php

            $reqType = isset($_POST['reqType'])? $_POST['reqType'] : "None";
            $currentpage = 1;

            $application = "";
            $patient = "";
            $doctor = "";
            $none = "";

            if($reqType == "Application"){
              $application = "selected";
            }
            elseif ($reqType == "Patient") {
              $patient = "selected";
            }
            elseif ($reqType == "Doctor") {
              $doctor = "selected";
            }
            else {
              $none = "selected";
            }
          ?>
              <option value="None" <?php echo "$none";?>>--Select Requirement Type--</option>
              <option value="Application" <?php echo "$application";?>>Application</option>
              <option value="Doctor" <?php echo "$doctor";?>>Doctor Claim</option>
              <option value="Patient" <?php echo "$patient";?>>Patient Claim</option>
            </select>&nbsp;&nbsp;

                    <div class="input-group">
                      <input type="submit" class="btn btn-primary" name="btnSearch" value="Go"/>
                    </div>
                  </div>
                </form>
</div>
</div>
