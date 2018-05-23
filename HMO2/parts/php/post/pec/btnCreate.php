<?php

$name = $_POST['pecName'];
$desc = $_POST['pecDesc'];
$status = $_POST['status'];

$check = mysqli_query($con, "SELECT COUNT(*) FROM tblpec WHERE pecName = '$name'");
$r = mysqli_fetch_row($check);

if($r[0] == 0){
mysqli_query($con, "INSERT INTO tblpec VALUES ('','$name','$desc','$status')");

    ?>
    <script>
    alertify.alert("Created Successfully !");
    </script>
<?php
}

else {
 ?>
 <script>
  alertify.alert("The Pre Existing Condition is already Existing ! Please Try Again");
  $("#newPEC").modal({"backdrop":"static"});
 </script>
 <?php
}

?>
