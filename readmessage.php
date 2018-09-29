<!DOCTYPE>
<html>
<head>
  <title>...CPANEL</title>
  <?php require 'kgcon.php';?>
  <link rel="stylesheet" type="text/css" href="styles/read.css">
  <link rel="stylesheet" type="text/css" href="styles/admin.css">
  <link rel="stylesheet" type="text/css" href="styles/tabs.css">
    <link rel="stylesheet" type="text/css" href="styles/home.css">
      <link rel="stylesheet" type="text/css" href="fontawesome-4.3.0.min.css">
      <script>
      function div_show() {
      document.getElementById('open').style.display = "block";
      }
      //Function to Hide Popup
      function div_hide(){
      document.getElementById('open').style.display = "none";
      }
    </script>

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
<div class="top-two"></div>

  <!-- Tab links -->
  <div class="tab" id="tabs">
      <!-- <button class="tablinks nav-b-one" onclick="openlink(event, 'upload')" id="defaultOpen">UPLOAD TO GALLERY</button>
        <button class="tablinks nav-b" onclick="openlink(event, 'inbox')">INBOX  <span class="fa fa-plus-circle"></span</button>
        <button class="tablinks nav-b" onclick="openlink(event, 'members')">MEMBERS </button> -->
      <a href="admin.php"><button class="back" >GO BACK <span class="fa fa-home"></span></button></a>
  </div>
<?php include 'readconfig.php';?>

<div class="board">
  <div class="read-cont">
    <div class="read">
  <!-- <div class="content"> -->

      <div class="name">
          <p>
            <span class="fa fa-user"></span>
            <?php
        echo $row['name'];
          ?></p>
      </div>
      <div class="email-phone">
        <div class="email">
          <p class="fa fa-envelope-o">
          <?php
          echo $row['email'];
          ?></p>
        </div>

        <div class="tel">
          <p class="fa fa-phone">
          <?php
          echo $row['tel'];
          ?></p>
        </div>

    </div>
      <div class="msg-content">
        <p><span class="fa fa-quote-left"></span>
        <?php
        echo $row['msg'];
        ?><span class="fa fa-quote-right"></span>
          </p>
      </div>

      <div class="date-time">
          <div class="date">
           <p><span class="fa fa-calendar"></span>  <?php
            echo $row['date'];
            ?></p>
          </div>

          <div class="date">

            <button class="btn-resp" onclick="div_show()">REPLY <i class="fa fa-mail-reply"></i></button>

          </div>
            <!-- <div class="btn-holder">

            </div> -->

          <div class="t">
            <p><span class="fa fa-clock-o"></span>
              <?php
              echo $row['time'];
              ?>
            </p>
          </div>

          <!-- <a id="popup" onclick="div_show()"><button class="btn-resp">REPLY</button></a> -->

    </div>
</div>

    </div>





    <div id="open">
        <div id="popupContact" class="pop_icon">
          <span class="fa fa-times-circle" id="close"   onclick ="div_hide()"></span>
        <caption>MESSAGE:</caption> <br/>

        <form method="POST" class="f-orm">

        <input type="hidden" name="email" value="<?php echo $row['email'] ?>">

        <textarea class="resp-text" name="message" required></textarea>

        <br/>
        <button class="send">SEND</button>
    </div>
    </div>
