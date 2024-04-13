<!DOCTYPE html>
<html lang="en">
  <head>
  </head>
  <?php include 'Library/head.php' ; ?>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    <?php require 'Library/header.php'; ?>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <?php include 'Library/sidebar.php'; ?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="bi bi-speedometer"></i> Dashboard</h1>
          <p>A free and open source Bootstrap 5 admin template</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ul>
      </div>
    <?php include 'Library/script.php' ?>
  </body>
</html>