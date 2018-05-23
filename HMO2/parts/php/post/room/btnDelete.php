<?php

$id = $_POST['id'];
$status = "Inactive";

mysqli_query($con,"UPDATE tblroom SET status = '$status' WHERE roomID = '$id'");

?>
<script>
  alertify.alert("Deleted Successfully !");
  setTimeout(function(){
      window.location = 'maintenance-room.php';
    }, 1500);
</script>
<?php

?>
