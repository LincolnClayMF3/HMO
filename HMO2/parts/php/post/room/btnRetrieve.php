<?php

$id = $_POST['id'];
$status = "Active";

mysqli_query($con,"UPDATE tblroom SET status = '$status' WHERE roomID = '$id'");

?>
<script>
alertify.alert("Retrieved Successfully !");
</script>
<?php

?>
