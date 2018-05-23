
<div class="box" style="overflow:auto; height: 650px">
  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped table-hover table-responsive" width="100%">
    <thead style="background-color: #428bca; color: white; text-shadow: 0px 0px 3px black;">
      <tr>
        <th>Coverage Category</th>
        <th>Description</th>
        <th>Classification</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <?php

      if($class == "None"){

        $fetchCategory = mysqli_query($con, "SELECT * FROM tblcategory WHERE status = 'Active' ORDER By categoryType ASC");

        while ($row = mysqli_fetch_array($fetchCategory)) {

          $categoryType = $row['categoryType'];
          $categoryDesc = $row['categoryDesc'];
          $categoryClass = $row['classification'];
          $categoryStatus = $row['status'];

          echo '<tr>';
          echo '<td>'.$categoryType.'</td>';
          echo '<td>'.$categoryDesc.'</td>';
          echo '<td>'.$categoryClass.'</td>';
          echo '<td>'.$categoryStatus.'</td>';
          echo '</tr>';
        }
      }

      if(isset($_POST['btnSearch'])){

        if($class == "Year"){

          $fetchCategory = mysqli_query($con, "SELECT * FROM tblcategory WHERE classification = 'Per Year'
                           AND status = 'Active' ORDER By categoryType ASC");

          while ($row = mysqli_fetch_array($fetchCategory)) {

            $categoryType = $row['categoryType'];
            $categoryDesc = $row['categoryDesc'];
            $categoryClass = $row['classification'];
            $categoryStatus = $row['status'];

            echo '<tr>';
            echo '<td>'.$categoryType.'</td>';
            echo '<td>'.$categoryDesc.'</td>';
            echo '<td>'.$categoryClass.'</td>';
            echo '<td>'.$categoryStatus.'</td>';
            echo '</tr>';
          }
        }

        elseif ($class == "Illness"){

          $fetchCategory = mysqli_query($con, "SELECT * FROM tblcategory WHERE classification = 'Per Illness'
                           AND status = 'Active' ORDER By categoryType ASC");

          while ($row = mysqli_fetch_array($fetchCategory)) {

            $categoryType = $row['categoryType'];
            $categoryDesc = $row['categoryDesc'];
            $categoryClass = $row['classification'];
            $categoryStatus = $row['status'];

            echo '<tr>';
            echo '<td>'.$categoryType.'</td>';
            echo '<td>'.$categoryDesc.'</td>';
            echo '<td>'.$categoryClass.'</td>';
            echo '<td>'.$categoryStatus.'</td>';
            echo '</tr>';
          }
        }

        elseif ($class == "IllYear"){

          $fetchCategory = mysqli_query($con, "SELECT * FROM tblcategory WHERE classification = 'Per Year Per Illness'
                           AND status = 'Active' ORDER By categoryType ASC");

          while ($row = mysqli_fetch_array($fetchCategory)) {

            $categoryType = $row['categoryType'];
            $categoryDesc = $row['categoryDesc'];
            $categoryClass = $row['classification'];
            $categoryStatus = $row['status'];

            echo '<tr>';
            echo '<td>'.$categoryType.'</td>';
            echo '<td>'.$categoryDesc.'</td>';
            echo '<td>'.$categoryClass.'</td>';
            echo '<td>'.$categoryStatus.'</td>';
            echo '</tr>';
          }
        }

      }

?>
</tbody>
</table>
</div>
</div>

<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>

<script>

$("#example1").DataTable(
  {
    "ordering": true
  }
);

</script>
