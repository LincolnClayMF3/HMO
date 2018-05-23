<?php

require 'parts/modals/coverage/update.php';
require 'parts/modals/coverage/delete.php';
require 'parts/modals/coverage/retrieve.php';

?>

<div class="box " style="overflow:auto; height: 650px">
  <div class="box-body" style="overflow-x: hidden">
    <table id="example1" class="table table-bordered table-striped table-hover table-responsive" width="100%">
      <thead style="background-color: #428bca; color: white; text-shadow: 0px 0px 3px black;">
      <tr>
        <th>Coverage Name</th>
        <th>Category</th>
        <th>Description</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
$result = mysqli_query($con,"SELECT c1.coverageID, c3.categoryType, c1.coverageName, c1.coverageDesc, c1.status
          FROM tblcoverage c1
          INNER JOIN tblCoverageCategory c2 ON c1.coverageID=c2.intCoverageID
          INNER JOIN tblcategory c3 ON c2.intCategoryID=c3.categoryID WHERE c1.status = '$status' ORDER by c1.coverageName ASC");

$num = mysqli_num_rows($result);


if($num > 0){
    while ($row = mysqli_fetch_array($result)) {

      $name =  $row['coverageName'];
      $category =  $row['categoryType'];
      $status = $row['status'];
      $id = $row['coverageID'];
      $desc = $row['coverageDesc'];

        if($status == "Active"){
        echo '<tr>';
        echo '<td>' . $name . '</td>';
        echo '<td>' . $category . '</td>';
        echo '<td>' . $desc . '</td>';
        echo '<td>' . $status . '</td>';
        echo '<td>
              <a href="#" data-toggle="modal" data-target="#updateCoverage'.$id.'" >
                    <button class="btn  btn-primary btn-xs">
                    Edit <span class="glyphicon glyphicon-pencil"></span></button>
              </a>

              <a href="#" data-toggle="modal" data-target="#deleteCoverage'.$id.'" >
                    <button class="btn btn-danger btn-xs">
                    Delete <span class="glyphicon glyphicon-remove"></span></button>
              </a>
              </td>';
        echo '</tr>';
    }
  }
}

  if(isset($_POST['btnSearch'])){

   $status = $_POST['filter'];

   if($status == "Inactive"){

$result = mysqli_query($con,"SELECT c1.coverageID, c3.categoryType, c1.coverageName, c1.coverageDesc, c1.status
          FROM tblcoverage c1
          INNER JOIN tblCoverageCategory c2 ON c1.coverageID=c2.intCoverageID
          INNER JOIN tblcategory c3 ON c2.intCategoryID=c3.categoryID WHERE c1.status = '$status' ORDER by c1.coverageName ASC");

         while ($row = mysqli_fetch_array($result)) {

           $name =  $row['coverageName'];
           $desc =  $row['coverageDesc'];
           $category =  $row['categoryType'];
           $status = $row['status'];
           $id = $row['coverageID'];

           if($status == "Inactive"){
             echo '<tr>';
             echo '<td>' . $name . '</td>';
             echo '<td>' . $category . '</td>';
             echo '<td>' . $desc . '</td>';
             echo '<td>' . $status . '</td>';
             echo '<td>
                     <a href="#" data-toggle="modal" data-target="#retrieveCoverage'.$id.'" >
                           <button class="btn btn-warning btn-xs">
                           Retrieve <span class="glyphicon glyphicon-download"></button>
                     </a>
                   </td>';
             echo '</tr>';
   }
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

$(function () {
  $("#example1").DataTable(
    {
      "lengthChange": true
    }
  );
});
</script>
