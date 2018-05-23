<?php

require 'parts/modals/service/standard/update.php';
require 'parts/modals/service/standard/delete.php';
require 'parts/modals/service/standard/retrieve.php';


?>

<div class="box" style="overflow:auto; height: 650px">
  <div class="box-body" style="overflow-x: hidden">
    <table id="example1" class="table table-bordered table-striped table-hover table-responsive" width="100%">
      <thead style="background-color: #428bca; color: white; text-shadow: 0px 0px 3px black;">
      <tr>
        <th>Service Name</th>
        <th>Coverage(s)</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php

    $result = mysqli_query($con, "SELECT * FROM tblstandard
              WHERE status = '$status' ORDER by standardName ASC");

    $num = mysqli_num_rows($result);


    if($num > 0){
    while ($row = mysqli_fetch_array($result)) {

      $id = $row['standardID'];
      $name =  $row['standardName'];
      $status = $row['status'];

      $arrayCoverage = array();

      $result2 = mysqli_query($con, "SELECT c1.coverageName, c1.status FROM tblcoverage c1
                 INNER JOIN tblStandardCoverage s1 ON s1.intCoverageID=c1.coverageID WHERE s1.intStandardID=$id
                 AND c1.status = 'Active'");

      while ($row=mysqli_fetch_array($result2)) {
        $arrayCoverage[]=$row['coverageName'];
      }

      if($status == "Active"){
        echo '<tr>';
        echo '<td>' . $name . '</td><td>';
        foreach ($arrayCoverage as $key) {
          echo "$key </br>";
        }
        echo '</td><td>' . $status . '</td>';
        echo '<td>
                <a href="#" data-toggle="modal" data-target="#updateStandard'.$id.'" >
                      <button class="btn  btn-primary btn-xs">
                      Edit <span class="glyphicon glyphicon-pencil"></button>
                </a>

                <a href="#" data-toggle="modal" data-target="#deleteStandard'.$id.'" >
                      <button class="btn  btn-danger btn-xs">
                      Delete <span class="glyphicon glyphicon-remove"></button>
                </a>

              </td>';
        echo '</tr>';
      }
    }
  }

    if(isset($_POST['btnSearch'])){

     $status = $_POST['filter'];

if($status == "Inactive"){
     $result = mysqli_query($con, "SELECT * FROM tblstandard WHERE status = 'Inactive' ORDER BY standardName ASC");

     while ($row = mysqli_fetch_array($result)) {

       $id = $row['standardID'];
       $name =  $row['standardName'];
       $status = $row['status'];

       $arrayCoverage = array();

       $result2 = mysqli_query($con, "SELECT c1.coverageName FROM tblcoverage c1
                  INNER JOIN tblStandardCoverage s1 ON s1.intCoverageID=c1.coverageID WHERE s1.intStandardID=$id");

       while ($row=mysqli_fetch_array($result2)) {
         $arrayCoverage[]=$row['coverageName'];
       }

       if($status == "Inactive"){
         echo '<tr>';
         echo '<td>' . $name . '</td><td>';
         foreach ($arrayCoverage as $key) {
           echo "$key </br>";
         }
         echo '</td><td>' . $status . '</td>';
         echo '<td>
                 <a href="#" data-toggle="modal" data-target="#retrieveStandard'.$id.'" >
                       <button class="btn  btn-warning btn-xs">
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
