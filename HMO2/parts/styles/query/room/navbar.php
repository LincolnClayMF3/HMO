<div class="container-fluid" style="margin-bottom: 15px">
<div class="col-xs-12" align="center">
  <form role="form" class="form-inline" method="post" autocomplete="off">

    <div class="form-group " >

      Room Type:&nbsp;
          <select name="roomType" class="form-control">
            <?php

            $room = isset($_POST['roomType'])? $_POST['roomType'] : "None";

          ?>
              <option value="None" selected>--Select Room Type--</option>
              <?php

              $fetchRoom = mysqli_query($con, "SELECT * FROM tblroom WHERE status = 'Active'");

              while ($row = mysqli_fetch_array($fetchRoom)) {
                $roomType = $row['roomType'];

                $roomSelected = "";

                if($room == $roomType){
                  $roomSelected = "selected";
                }

                echo "<option value=\"$roomType\" $roomSelected>$roomType</option>";
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
