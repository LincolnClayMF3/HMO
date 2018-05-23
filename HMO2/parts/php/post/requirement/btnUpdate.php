<?php

$id = $_POST['id'];
$name = $_POST['requirementName'];
$type = $_POST['requirementType'];
$desc = $_POST['requirementDesc'];
$status = $_POST['status'];

$check = mysqli_query($con, "SELECT COUNT(*) FROM tblrequirement WHERE requirementName = '$name' AND requirementType = '$type' AND requirementDesc = '$desc'");
$r = mysqli_fetch_row($check);

if($r[0] == 0){
mysqli_query($con,"UPDATE tblrequirement SET requirementName = '$name', requirementType = '$type', requirementDesc = '$desc',
                                             status = '$status' WHERE requirementID = '$id'");

// echo "<meta http-equiv='refresh' content='0'>";

?>
<script>
alertify.alert("Edited Successfully !");
setTimeout(function(){
window.location = 'maintenance-requirement.php';
}, 5000);
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
