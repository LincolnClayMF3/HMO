<div class="container-fluid" style="margin-bottom: 15px">
<div align="right">
  <form role="form" class="form-inline" method="post">
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

                    $status = isset($_POST['filter'])? $_POST['filter'] : "Pending";
                    $search = isset($_POST['search'])? $_POST['search'] : "";
                    $currentpage = 1;

                    if($status=="Pending"){
                      $pending = "selected";
                      $disapproved = "";
                      $approved = "";
                      $disbursed = "";
                    }
                    else if($status == "Approved"){
                      $pending = "";
                      $disapproved = "";
                      $disbursed = "";
                      $approved = "selected";
                    }
                    elseif ($status == "Disbursed") {
                      $pending = "";
                      $disapproved = "";
                      $disbursed = "selected";
                      $approved = "";
                    }
                    else {
                      $pending = "";
                      $disapproved = "selected";
                      $approved = "";
                      $disbursed = "";
                    }
                  ?>
                      <option value="Approved" <?php echo "$approved";?>>Approved</option>
                      <option value="Disapproved" <?php echo "$disapproved";?>>Disapproved</option>
                      <option value="Disbursed" <?php echo "$disbursed";?>>Disbursed</option>
                      <option value="Pending" <?php echo "$pending";?>>Pending</option>
                    </select>
                  </div>
                  <div class="form-group">                                            <!-- SEARCH -->
                    <div class="input-group">
                      <input type="submit" class="btn btn-primary" name="btnSearch" value="Go"/>
                    </div>
                  </div>
                </form>
</div>
</div>
