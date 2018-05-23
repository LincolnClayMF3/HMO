<div class="container-fluid" style="margin-bottom: 15px">
<div class="col-xs-12" align="center">
  <form role="form" class="form-inline" method="post" autocomplete="off">

    <div class="form-group " >

      Service Type:&nbsp;
          <select name="type" class="form-control">
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

            $type = isset($_POST['type'])? $_POST['type'] : "None";
            $currentpage = 1;

            $stnd = "";
            $add = "";
            $none = "";

            if($type == "Standard"){
              $stnd = "selected";
            }
            elseif ($type == "Additional") {
              $add = "selected";
            }
            else {
              $none = "selected";
            }
          ?>
              <option value="None" <?php echo "$none";?>>--Select Service Type--</option>
              <option value="Standard" <?php echo "$stnd";?>>Standard</option>
              <option value="Additional" <?php echo "$add";?>>Additional</option>
            </select>&nbsp;&nbsp;

                    <div class="input-group">
                      <input type="submit" class="btn btn-primary" name="btnSearch" value="Go"/>
                    </div>
                  </div>
                </form>
</div>
</div>
