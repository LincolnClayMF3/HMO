<div class="container-fluid" style="margin-bottom: 15px">
<div class="col-xs-12" align="center">
  <form role="form" class="form-inline" method="post" autocomplete="off">

    <div class="form-group">

      View By:&nbsp;&nbsp;
      <select id="display" name="display" class="form-control display">
        <?php

        $display = isset($_POST['display'])? $_POST['display'] : "Statistical";

        $tabular = "";
        $statistical = "";

        if($display == "Tabular"){
          $tabular = "selected";
        }
        elseif ($display == "Statistical") {
          $statistical = "selected";
        } "selected";

      ?>
          <option value="Tabular" <?php echo "$tabular";?>>Tabular</option>
          <option value="Statistical" <?php echo "$statistical";?>>Statistical</option>
        </select>&nbsp;&nbsp;

      Filter By:&nbsp;&nbsp;
      <select id="frequency" name="frequency" class="form-control frequency">
        <?php

        $frequency = isset($_POST['frequency'])? $_POST['frequency'] : "None";

        $month = "";
        $year = "";
        $all = "";

        if($frequency == "Month"){
          $month = "selected";
        }
        elseif ($frequency == "Year") {
          $year = "selected";
        }
        else {
          $all = "selected";
        }
      ?>
          <option value="None" <?php echo "$all";?>>--Filter By--</option>
          <option value="Month" <?php echo "$month";?>>Month</option>
          <option value="Year" <?php echo "$year";?>>Year</option>
        </select>&nbsp;&nbsp;&nbsp;

                                        Claim Type:&nbsp;&nbsp;
                                        <select id="claimType" class="form-control claimType" name="claimType" >
                                          <?php

                                          $claimType = isset($_POST['claimType'])? $_POST['claimType'] : "None";
                                          $search = isset($_POST['search'])? $_POST['search'] : "";
                                          $currentpage = 1;

                                          $patient = "";
                                          $doctor = "";
                                          $none = "";

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
                                          <option value="None" <?php echo "$none";?>>--Select Claim Type--</option>
                                          <option value="Patient" <?php echo "$patient";?>>Patient</option>
                                          <option value="Doctor" <?php echo "$doctor";?>>Doctor</option>
                                        </select>&nbsp;


                                        Claim Status:&nbsp;&nbsp;
                                        <select id="claimStatus" class="form-control claimStatus" name="claimStatus" >
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

                                          $claimStatus = isset($_POST['claimStatus'])? $_POST['claimStatus'] : "None";
                                          $search = isset($_POST['search'])? $_POST['search'] : "";
                                          $currentpage = 1;

                                          $approved = "";
                                          $disapproved = "";
                                          $none = "";

                                          if($claimStatus == "Approved"){
                                            $approved = "selected";
                                          }
                                          elseif ($claimStatus == "Disapproved") {
                                            $disapproved = "selected";
                                          }
                                          else {
                                            $none = "selected";
                                          }
                                        ?>
                                          <option value="None" <?php echo "$none";?>>--Select Status--</option>
                                          <option value="Approved" <?php echo "$approved";?>>Approved</option>
                                          <option value="Disapproved" <?php echo "$disapproved";?>>Disapproved</option>
                                        </select>&nbsp;

                                        <!-- From:&nbsp;
                                        <input class="form-control" type="date" name="from">&nbsp;

                                        To:&nbsp;
                                        <input class="form-control" type="date" name="to"> -->


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
