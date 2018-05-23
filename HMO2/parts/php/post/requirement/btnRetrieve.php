<?php

$id = $_POST['id'];
$status = "Active";

mysqli_query($con,"UPDATE tblrequirement SET status = '$status' WHERE requirementID = '$id'");

?>
<script>
alertify.alert("Retrieved Successfully !");
</script>
<?php

?>
