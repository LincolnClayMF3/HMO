
<div class="box" style="overflow:auto; height: 650px">
  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped table-hover table-responsive" width="100%">
    <thead style="background-color: #428bca; color: white; text-shadow: 0px 0px 3px black;">
      <tr>
        <th>Coverage Name</th>
        <th>Coverage Category</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <?php

      if($category == "None"){

        $fetchCoverage = mysqli_query($con, "SELECT c1.coverageID, c3.categoryType, c1.coverageName, c1.status
                  FROM tblcoverage c1
                  INNER JOIN tblCoverageCategory c2 ON c1.coverageID=c2.intCoverageID
                  INNER JOIN tblcategory c3 ON c2.intCategoryID=c3.categoryID WHERE c1.status = 'Active' ORDER by c3.categoryType ASC");

        while ($row = mysqli_fetch_array($fetchCoverage)) {

          $coverageName = $row['coverageName'];
          $coverageType = $row['categoryType'];
          $coverageStatus = $row['status'];

          echo '<tr>';
          echo '<td>'.$coverageName.'</td>';
          echo '<td>'.$coverageType.'</td>';
          echo '<td>'.$coverageStatus.'</td>';
          echo '</tr>';
        }
      }

      if(isset($_POST['btnSearch'])){

        $category = $_POST['category'];

          $fetchCoverage = mysqli_query($con, "SELECT c1.coverageID, c3.categoryType, c1.coverageName, c1.status FROM tblcoverage c1
                    INNER JOIN tblCoverageCategory c2 ON c1.coverageID=c2.intCoverageID
                    INNER JOIN tblcategory c3 ON c2.intCategoryID=c3.categoryID WHERE c3.categoryType = '$category'
                    AND c1.status = 'Active' ORDER by c3.categoryType ASC");

          while ($row = mysqli_fetch_array($fetchCoverage)) {

            $coverageName = $row['coverageName'];
            $coverageType = $row['categoryType'];
            $coverageStatus = $row['status'];

            echo '<tr>';
            echo '<td>'.$coverageName.'</td>';
            echo '<td>'.$coverageType.'</td>';
            echo '<td>'.$coverageStatus.'</td>';
            echo '</tr>';
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
