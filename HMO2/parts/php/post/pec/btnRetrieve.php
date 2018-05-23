<?php

$id = $_POST['id'];

$status = "Active";

mysqli_query($con, "UPDATE tblpec SET status = '$status' WHERE pecID = '$id'");

?>
<script>
alertify.alert("Retrieved Successfully !");
</script>
<?php

?>
