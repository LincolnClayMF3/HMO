<?php

// require 'parts/modals/requirement/update.php';
// require 'parts/modals/requirement/delete.php';
// require 'parts/modals/requirement/retrieve.php';

?>

<div class="box" style="overflow:auto; height: 650px">
  <div class="box-body" style="overflow-x: hidden">
    <table id="example1" class="table table-bordered table-striped table-hover table-responsive" width="100%">
    <thead style="background-color: #428bca; color: white; text-shadow: 0px 0px 3px black;">
      <tr>
        <th>Employee Name</th>
        <th>Employee Type</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php

      $result = mysqli_query($con, "SELECT *, CONCAT(userFirstName,' ',userLastName) AS name FROM tbluser");


      $num = mysqli_num_rows($result);

        if($num > 0){
          while ($row = mysqli_fetch_array($result)) {

            $name = $row['name'];
            $type = $row['userType'];
            $status = $row['status'];
            $id = $row['userID'];

              echo '<tr>';
              echo '<td>' . $name . '</td>';
              echo '<td>' . $type . '</td>';
              echo '<td>' . $status . '</td>';
              echo '<td>
                    <a href="#" data-toggle="modal" data-target="#updateRequirement'.$id.'" >
                          <button class="btn  btn-primary btn-xs">
                          Edit <span class="glyphicon glyphicon-pencil"></button>
                    </a>

                    <a href="#" data-toggle="modal" data-target="#deleteRequirement'.$id.'" >
                          <button class="btn  btn-danger btn-xs">
                          Delete <span class="glyphicon glyphicon-remove"></button>
                    </a>

                    </td>';
              echo '</tr>';
    }
  }


  if(isset($_POST['btnSearch'])){

   $status = $_POST['filter'];

   if($status == "Inactive"){

       $result = mysqli_query($con, "SELECT * FROM tblrequirement WHERE status ='Inactive' ORDER by requirementName ASC");

         while ($row = mysqli_fetch_array($result)) {

           $name = $row['requirementName'];
           $type = $row['requirementType'];
           $desc = $row['requirementDesc'];
           $status = $row['status'];
           $id = $row['requirementID'];

             echo '<tr>';
             echo '<td>' . $name . '</td>';
             echo '<td>' . $type . '</td>';
             echo '<td>' . $desc . '</td>';
             echo '<td>' . $status . '</td>';
             echo '<td>
                     <a href="#" data-toggle="modal" data-target="#retrieveRequirement'.$id.'" >
                           <button class="btn btn-warning btn-xs">
                           Retrieve <span class="glyphicon glyphicon-download"></button>
                     </a>
                   </td>';
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
    "lengthChange": true
  }
);

</script>
