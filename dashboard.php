<!DOCTYPE>
<html>
<head>
  <title>...CPANEL</title>
  <?php require 'kgcon.php';?>
  <link rel="stylesheet" type="text/css" href="styles/tabs.css">
  <link rel="stylesheet" type="text/css" href="styles/admin.css">
  <link rel="stylesheet" type="text/css" href="styles/dashboard.css">
    <link rel="stylesheet" type="text/css" href="styles/home.css">
    <link rel="stylesheet" type="text/css" href="styles/members.css">
      <link rel="stylesheet" type="text/css" href="fontawesome-4.3.0.min.css">
</head>

<body>
  <div class="top"></div>
<!--LOGO AND KWORSHIPPERS STARTS HERE!! -->
<div class="upper-nav">
  <div class="top-nav">
      <div class="logo">
        <img src="media/kw.jpg"  class="kw">
      </div>
      <div class="kws">
        <img src="media/kws-one.jpeg"  class="kw-one">
</div>
</div>

<!--LOGO AND KWORSHIPPERS  ENDS HERE!!-->
<div class="top"></div>

    <div class="d-dashboard">
        <p class="p-holder">
          WELCOME!!! ADMIN
        </p>
          <?php
          $query ="SELECT msg_id from inbox";
          $sql = mysqli_query($con,$query);
          $total = mysqli_num_rows($sql)


          ?>
          You Have <mark><?php
          // if ($total > 1) {
          //   # code...
          //   echo $total;
          // }
          echo $total;
          ?></mark> NEW MESSAGE

    </div>
