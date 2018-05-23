<?php

$id = $_POST['id'];
$status = "Active";

mysqli_query($con,"UPDATE tbladditional SET status = '$status' WHERE additionalID = '$id'");

?>
<script>
alertify.alert("Retrieved Successfully !");
</script>
<?php

?>
