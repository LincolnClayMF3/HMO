<?php

$id = $_POST['id'];
$status = "Active";

mysqli_query($con,"UPDATE tblmembershiptype SET status = '$status' WHERE membershipID = '$id'");

?>
<script>
alertify.alert("Retrieved Successfully !");
</script>
<?php

?>
