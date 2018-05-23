<?php

require 'parts/php/connection.php';

$lastName = $_POST['employeeLastName'];
$firstName = $_POST['employeeFirstName'];

if(!empty($_POST['employeeMiddleName'])){
  $middleName = $_POST['employeeMiddleName'];
}

$type = $_POST['employeeType'];
$bday = $_POST['employeeBday'];
$telephone = $_POST['employeeTelephone'];
$mobile = $_POST['employeeMobile'];

if(!empty($_POST['employeeEmail'])){
  $email = $_POST['employeeEmail'];
}

$username = $_POST['employeeUsername'];
$password = $_POST['employeePassword'];
$status = $_POST['status'];

$check = mysqli_query($con, "SELECT COUNT(*) FROM tbluser WHERE userLastName = '$lastName'
         AND userFirstName = '$firstName' AND userMiddleName = '$middleName' AND username = '$username'
         AND password = '$password' AND userBday = '$bday' AND status = 'Active'");
$r = mysqli_fetch_row($check);

if($r[0] == 0){
// $sql = mysqli_query($con, "SELECT requirementID FROM tblrequirement ORDER BY requirementID DESC LIMIT 1;");
//
// $num = mysqli_num_rows($sql);
//
// if( $num > 0){
//   while ($row = mysqli_fetch_array($sql)) {
//     $id = (int) $row['requirementID'];
//   }
//   $id++;
// }else{
//   $id = 1;
// }

mysqli_query($con, "INSERT INTO tbluser VALUES('','$lastName','$firstName',
'$middleName','$telephone','$mobile','$email','$bday','$type','$username','$password','$status')");

?>
<script>
alertify.alert("Created Successfully !");
</script>
<?php
}

else {
?>
<script>
alertify.alert("The Employee is already Existing ! Please Try Again");
$("#newEmployee").modal({"backdrop":"static"});
</script>
<?php
}

?>
