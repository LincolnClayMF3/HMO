<div class="container-fluid" style="margin-bottom: 15px">
<div class="col-xs-12" align="center">
  <form role="form" class="form-inline" method="post" autocomplete="off">

    <div class="form-group " >

      Coverage Category:&nbsp;
          <select name="category" class="form-control">
            <?php

            $category = isset($_POST['category'])? $_POST['category'] : "None";

          ?>
              <option value="None" selected>--Select Coverage Category--</option>
              <?php

              $fetchCategory = mysqli_query($con, "SELECT * FROM tblcategory WHERE status = 'Active'");

              while ($row = mysqli_fetch_array($fetchCategory)) {
                $categoryType = $row['categoryType'];

                $categorySelected = "";

                if($category == $categoryType){
                  $categorySelected = "selected";
                }

                echo "<option value=\"$categoryType\" $categorySelected>$categoryType</option>";
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
