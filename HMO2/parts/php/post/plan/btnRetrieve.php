<?php

$id = $_POST['id'];
$status = "Active";

mysqli_query($con,"UPDATE tblplan SET status = '$status' WHERE planID = '$id'");

?>
<script>
alertify.alert("Retrieved Successfully !");
</script>
<?php

?>
