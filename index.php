<?php

include 'templates/head.php';
$services = ['nginx' => 'Nginx', 'memcached' => 'Memcached', 'redis-server' => 'Redis'];
?>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>PB</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Press</b>Boxx</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Notifications Menu -->
<!--          <li class="dropdown notifications-menu">-->
            <!-- Menu toggle button -->
<!--            <a href="#" class="dropdown-toggle" data-toggle="dropdown">-->
<!--              <i class="fa fa-bell-o"></i>-->
<!--              <span class="label label-warning">10</span>-->
<!--            </a>-->
<!--            <ul class="dropdown-menu">-->
<!--              <li class="header">You have 10 notifications</li>-->
<!--              <li>-->
                <!-- Inner Menu: contains the notifications -->
<!--                <ul class="menu">-->
<!--                  <li> --><!-- start notification -->
<!--                    <a href="#">-->
<!--                      <i class="fa fa-users text-aqua"></i> 5 new members joined today-->
<!--                    </a>-->
<!--                  </li>-->
                  <!-- end notification -->
<!--                </ul>-->
<!--              </li>-->
<!--              <li class="footer"><a href="#">View all</a></li>-->
<!--            </ul>-->
<!--          </li>-->
          <!-- Control Sidebar Toggle Button -->
<!--          <li>-->
<!--            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>-->
<!--          </li>-->
        </ul>
      </div>
    </nav>
  </header>

  <?php include 'templates/sidebar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Admin Console
      </h1>
<!--      <ol class="breadcrumb">-->
<!--        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>-->
<!--        <li class="active">Here</li>-->
<!--      </ol>-->
    </section>

    <!-- Main content -->
    <section id="main" class="content">

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include 'templates/footer.php'; ?>

  <?php include 'templates/control-sidebar.php'; ?>

</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>
</html>
