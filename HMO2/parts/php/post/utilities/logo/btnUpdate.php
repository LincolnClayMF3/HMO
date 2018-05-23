<?php

ini_set('display_errors', 'On');
error_reporting(E_ALL);

 $fileExistsFlag = 0;
 $fileName = $_FILES['Filename']['name'];
 $link = mysqli_connect("localhost","root","","dbhmo") or die("Error ".mysqli_error($link));
 /*
 *	Checking whether the file already exists in the destination folder
 */
 $query = "SELECT utilitylogoName FROM tbllogo WHERE utilitylogoName='$fileName'";
 $output = $link->query($query) or die("Error : ".mysqli_error($link));
 while($row = mysqli_fetch_array($output)) {
 if($row['utilitylogoName'] == $fileName) {
 $fileExistsFlag = 1;
 }
 }
 /*
 * 	If file is not present in the destination folder
 */
 if($fileExistsFlag == 0) {
   mysqli_query($con, "DELETE FROM tbllogo");
 $target = "uploads/system/";
 $fileTarget = $target.$fileName;
 $tempFileName = $_FILES["Filename"]["tmp_name"];
 $filetype = $_FILES['Filename']['type'];
 $movefile = move_uploaded_file($tempFileName,$fileTarget);
 /*
 *	If file was successfully uploaded in the destination folder
 */
 if($movefile) {
   ?><script>
   alertify.alert('Edited Successfully!');
   setTimeout(function(){
   window.location = 'utilities-skins.php';
 }, 5000);
     </script><?php
 $query = "INSERT INTO tbllogo(utilitylogoID,utilitylogoName,utilitylogoPath,utilitylogoType) VALUES ('1','$fileName','$fileTarget','$filetype')";
 $link->query($query) or die("Error : ".mysqli_error($link));
 }
 else {
  ?><script>
    alertify.alert("Sorry !!! There was an error in uploading your file");
    setTimeout(function(){
    window.location = 'utilities-skins.php';
  }, 1000);
  </script><?php
 }
 mysqli_close($link);
 }
 /*
 * 	If file is already present in the destination folder
 */
 else {
   ?><script>
     alertify.alert('Files Exist. No Changes Made.');
   </script><?php
 mysqli_close($link);
 }


?>
