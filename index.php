<?php
//Loader page


?>

<!DOCTYPE html>
<html lang="en">
<?php include ('/layouts/head.php'); ?>
<body class="hold-transition sidebar-mini layouts-fixed">
<div class="wrapper">

  <?php include ('/layouts/navbar.php'); ?>
  <?php include ('/layouts/sidebar.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
  <?php include ('/pages/dashboard.php');?>
  <?php include ('/layouts/footer.php');?>
  
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<?php include ('/layouts/javas.php');?>
</body>
</html>
