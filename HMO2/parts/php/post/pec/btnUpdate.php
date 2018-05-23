<?php

$id = $_POST['id'];
$name = $_POST['pecName'];
$desc = $_POST['pecDesc'];
$status = $_POST['status'];

$check = mysqli_query($con, "SELECT COUNT(*) FROM tblpec WHERE pecName = '$name' AND pecDesc = '$desc'");
$r = mysqli_fetch_row($check);

if($r[0] == 0){
mysqli_query($con,"UPDATE tblpec SET pecName = '$name', pecDesc = '$desc', status = '$status' WHERE pecID = '$id'");

// echo "<meta http-equiv='refresh' content='0'>";

?>
<script>
alertify.alert("Edited Successfully !");
setTimeout(function(){
window.location = 'maintenance-pec.php';
}, 1500);
</script>
<?php
}

else {
?>
<script>
alertify.alert("No Changes were made");
</script>
<?php
}
?>
