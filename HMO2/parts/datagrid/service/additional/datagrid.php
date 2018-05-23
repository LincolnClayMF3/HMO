<?php

require 'parts/modals/service/additional/update.php';
require 'parts/modals/service/additional/delete.php';
require 'parts/modals/service/additional/retrieve.php';

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

    $result = mysqli_query($con, "SELECT * FROM tbladditional
              WHERE status = '$status' ORDER by additionalName ASC");

    $num = mysqli_num_rows($result);

    if($num > 0){
    while ($row = mysqli_fetch_array($result)) {

      $id = $row['additionalID'];
      $name =  $row['additionalName'];
      $status = $row['status'];

      $arrayCoverage = array();

      $result2 = mysqli_query($con, "SELECT c1.coverageName FROM tblcoverage c1
                 INNER JOIN tbladditionalcoverage a1 ON a1.intCoverageID=c1.coverageID WHERE a1.intAdditionalID=$id");

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
                <a href="#" data-toggle="modal" data-target="#updateAdditional'.$id.'" >
                      <button class="btn  btn-primary btn-xs">
                      Edit <span class="glyphicon glyphicon-pencil"></button>
                </a>

                <a href="#" data-toggle="modal" data-target="#deleteAdditional'.$id.'" >
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
     $result = mysqli_query($con, "SELECT * FROM tbladditional
               WHERE status = '$status' ORDER by additionalName ASC");

     while ($row = mysqli_fetch_array($result)) {

       $id = $row['additionalID'];
       $name =  $row['additionalName'];
       $status = $row['status'];

       $arrayCoverage = array();

       $result2 = mysqli_query($con, "SELECT c1.coverageName FROM tblcoverage c1
                  INNER JOIN tbladditionalcoverage a1 ON a1.intCoverageID=c1.coverageID WHERE a1.intAdditionalID=$id");

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
                 <a href="#" data-toggle="modal" data-target="#retrieveAdditional'.$id.'" >
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
  $("#example1").DataTable({
    "lengthChange": true
  });
})

</script>
