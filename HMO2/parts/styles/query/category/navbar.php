<div class="container-fluid" style="margin-bottom: 15px">
<div class="col-xs-12" align="center">
  <form role="form" class="form-inline" method="post" autocomplete="off">

    <div class="form-group " >

      Classification:&nbsp;
          <select name="class" class="form-control">
            <?php

            $class = isset($_POST['class'])? $_POST['class'] : "None";
            $currentpage = 1;

            $year = "";
            $illness = "";
            $illYear = "";
            $none = "";

            if($class == "Year"){
              $year = "selected";
            }
            elseif ($class == "Illness") {
              $illness = "selected";
            }
            elseif ($class == "IllYear") {
              $illYear = "selected";
            }
            else {
              $none = "selected";
            }
          ?>
              <option value="None" <?php echo "$none";?>>--Select Specification--</option>
              <option value="Year" <?php echo "$year";?>>Per Year</option>
              <option value="Illness" <?php echo "$illness";?>>Per Illness</option>
              <option value="IllYear" <?php echo "$illYear";?>>Per Year / Per Illness</option>
            </select>&nbsp;&nbsp;

                    <div class="input-group">
                      <input type="submit" class="btn btn-primary" name="btnSearch" value="Go"/>
                    </div>
                  </div>
                </form>
</div>
</div>
