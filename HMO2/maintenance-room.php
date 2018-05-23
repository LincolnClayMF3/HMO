<?php

require 'parts/php/connection.php';

session_start();

if(isset($_SESSION['type'])){
  $userName = $_SESSION['name'];

?>
<!DOCTYPE HTML>
<html>
<head>
  <?php
    require 'parts/functions/general.php';
  ?>
</head>
<?php
$result = mysqli_query($con,"SELECT * FROM tblskins");
  while ($row = mysqli_fetch_array($result)) {

    $id = $row['utilitiesID'];
    $name = $row['utilitiesskin'];
  }
     ?>
<body class="hold-transition <?php echo $name?> sidebar-mini">
  <div class="wrapper">

    <header class="main-header">
      <?php
        require 'parts/styles/header.php';
      ?>
    </header>

    <aside class="main-sidebar">
      <?php
        require 'parts/styles/room/sidenav.php';
      ?>
    </aside>

    <div class="content-wrapper">
      <section name="menu" class="content">
        <?php
          require 'parts/styles/room/header.php';
          require 'parts/styles/room/navbar.php';
          require 'parts/datagrid/room/datagrid.php';
        ?>
      </section>
    </div>

    <footer class="main-footer">
      <?php
        require 'parts/styles/footer.php';
      ?>
    </footer>

  </div>
  <script src="js/resetFormModal.js" type="text/javascript"></script>
</body>
</html>
<?php
}
else {
  ?>
  <div align="center" style="margin-top: 15em">
  <p>You need to Login first before you proceed</p>
  <a href="login.php">Go to Login Form</a>
  </div>
  <?php
}
?>
