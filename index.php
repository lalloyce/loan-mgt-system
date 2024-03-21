<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link rel="icon" href="new_UI/img/logo.png">
  <title>Loan Management System</title>
  <?php
    session_start();
    if(!isset($_SESSION['login_id']))
      header('location:login.php');
    include('./header.php');
  ?>
  <style>
    <?php include 'new_UI/css/index.css'; ?>
    body{
      /* background: #80808045; */
    }
  </style>
</head>
<body>
  <?php include 'topbar.php' ?>
  <div class="toast" id="alert_toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-body text-white"></div>
  </div>
  <main id="view-panel" >
    <?php $page = isset($_GET['page']) ? $_GET['page'] :'home'; ?>
    <?php include $page.'.php' ?>
  </main>
  <div id="preloader"></div>
  <?php include 'modals.php' ?>
  <footer>All rights reserved &copy; 2023 | Designed & Developed By Happy Kumar</footer>
  <script src="main.js"></script>
</body>
</html>