<?php

$id = $_POST['id'];
$type = $_POST['roomType'];
$desc = $_POST['roomDesc'];
$amount = $_POST['roomAmount'];
$amount = floatval(preg_replace('/[^\d.]/', '', $amount));
$status = $_POST['status'];

$check = mysqli_query($con, "SELECT COUNT(*) FROM tblroom WHERE roomType = '$type'
         AND roomDesc = '$desc' AND roomAmount = '$amount' AND status = '$status'");
$r = mysqli_fetch_row($check);

if($r[0] == 0){
mysqli_query($con,"UPDATE tblroom SET roomType = '$type', roomDesc = '$desc',
            roomAmount = '$amount', status = '$status' WHERE roomID = '$id'");
          ?>
          <script>
            alertify.alert("Edited Successfully !");
            setTimeout(function(){
                window.location = 'maintenance-room.php';
              }, 3000);
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
