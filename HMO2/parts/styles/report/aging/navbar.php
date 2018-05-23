<div class="container-fluid" style="margin-bottom: 15px">
<div class="col-xs-12" align="center">
  <form role="form" class="form-inline" method="post" autocomplete="off">

    <div class="form-group">
                    Frequency:&nbsp;&nbsp;
                        <select id="frequency" name="frequency" class="form-control frequency">
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

                          $frequency = isset($_POST['frequency'])? $_POST['frequency'] : "None";
                          $search = isset($_POST['search'])? $_POST['search'] : "";
                          $currentpage = 1;

                          $daily = "";
                          $weekly = "";
                          $monthly = "";
                          $none = "";

                          if($frequency == "Daily"){
                            $daily = "selected";
                          }
                          elseif ($frequency == "Weekly") {
                            $weekly = "selected";
                          }
                          elseif ($frequency == "Monthly") {
                            $monthly = "selected";
                          }
                          else {
                            $none = "selected";
                          }
                        ?>
                            <option value="None" <?php echo "$none";?>>All</option>
                            <option value="Daily" <?php echo "$daily";?>>Daily</option>
                            <option value="Weekly" <?php echo "$weekly";?>>Weekly</option>
                            <option value="Monthly" <?php echo "$monthly";?>>Monthly</option>
                          </select>&nbsp;&nbsp;&nbsp;

                          Week No.&nbsp;&nbsp;
                          <select id="week" name="week" class="form-control week" disabled>
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

                            $week = isset($_POST['week'])? $_POST['week'] : "None";
                            $search = isset($_POST['search'])? $_POST['search'] : "";
                            $currentpage = 1;

                            $first = "";
                            $second = "";
                            $third = "";
                            $fourth = "";
                            $none = "";

                            if($week == "1"){
                              $first = "selected";
                            }
                            elseif ($week == "2") {
                              $second = "selected";
                            }
                            elseif ($week == "3") {
                              $third = "selected";
                            }
                            elseif ($week == "4") {
                              $fourth = "selected";
                            }
                            else {
                              $none = "selected";
                            }
                          ?>
                              <option value="None" <?php echo "$none";?>>None</option>
                              <option value="1" <?php echo "$first";?>>1st</option>
                              <option value="2" <?php echo "$second";?>>2nd</option>
                              <option value="3" <?php echo "$third";?>>3rd</option>
                              <option value="4" <?php echo "$fourth";?>>4th</option>
                            </select>&nbsp;&nbsp;&nbsp;



                                        <!-- Claim Type:&nbsp;&nbsp;
                                        <select id="claimtest" class="form-control claimType" name="claimType" >
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

                                          $claimType = isset($_POST['claimType'])? $_POST['claimType'] : "None";
                                          $search = isset($_POST['search'])? $_POST['search'] : "";
                                          $currentpage = 1;

                                          $patient = "";
                                          $doctor = "";

                                          if($claimType == "Patient"){
                                            $patient = "selected";
                                          }
                                          elseif ($claimType == "Doctor") {
                                            $doctor = "selected";
                                          }
                                          else {
                                            $none = "selected";
                                          }
                                        ?>
                                          <option value="None" <?php echo "$none";?>>--Select Frequency--</option>
                                          <option value="Patient" <?php echo "$patient";?>>Patient</option>
                                          <option value="Doctor" <?php echo "$doctor";?>>Doctor</option>
                                        </select>&nbsp;&nbsp;&nbsp; -->



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
$(".frequency").change(function(){

  if ($("#frequency").val() == 'Monthly'){
    $("select[name=week]").prop('disabled', false);
  }
  else {
    $("select[name=week]").prop('disabled', true);
  }

});
</script>
