<?php require 'adminsession.php';?>
<!DOCTYPE>
<html>
<head>
  <title>...CPANEL</title>
  <?php require 'kgcon.php';?>
  <link rel="stylesheet" type="text/css" href="styles/tabs.css">
  <link rel="stylesheet" type="text/css" href="styles/admin.css">
    <link rel="stylesheet" type="text/css" href="styles/home.css">
    <link rel="stylesheet" type="text/css" href="styles/dashboard.css">

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
<div class="top-two"></div>

  <!-- Tab links -->
  <div class="tab" id="tabs">
    <button class="tablinks nav-a" onclick="openlink(event, 'dashboard')" id="defaultOpen">DASHBOARD<span class="fa fa-laptop"></span></button>
    <button class="tablinks nav-b-a" onclick="openlink(event, 'upload')">UPLOAD TO GALLERY<span class="fa fa-upload"></span></button>
      <button class="tablinks nav-b" onclick="openlink(event, 'inbox')">INBOX  <span class="fa fa-inbox"></span></button>
      <a href="members.php"><button class="tablinks nav-b" onclick="openlink(event, 'members')">MEMBERS </button></a>
      <a href="event.php"><button class="nav-b" >UPLOAD TO EVENTS <span class="fa fa-upload"></span></button></a>
      <a href="home.php"><button class="nav-b" >HOME <span class="fa fa-home"></span></button></a>
            <a href="signout.php"><button class="nav-b" >SIGN OUT <span class="fa fa-sign-out"></span></button></a>
  </div>
  <!-- Tab content -->


  <div id="dashboard"  class="tabcontent d-dashboard">
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

  <div id="upload" class="tabcontent upload">
    <div class="container">
      <div class="contain">
      <form method="POST" enctype="multipart/form-data">
        <input type="file" name="photo" id="uploadFile"  value="uploadFile"/><br/>
        <button type="submit" name="btn" class="button">UPLOAD</button>
      </form>
    </div>
    <?php require 'uploadconfig.php';?>
    </div>
    <div class="table">
    <table border="1">

      <tr>
        <td> S/N</td>
        <td> IMAGE</td>
        <td>DELETE</td>
      </tr>

      <?php

    $query = "SELECT * FROM gallery  ORDER BY photo_id DESC";

    $sql = mysqli_query($con,$query);

    while ($row=mysqli_fetch_array($sql))

    {

    ?>
    <tr>

            <td>
              <?php echo $row['photo_id'];?>
            </td>

            <td>
                  <?php echo "<img src='galleria/" .$row['photo']."' class='t-imgs'>"; ?>
              </td>

              <td>
                  <a href="delete.php?photo_id=<?php echo $row['photo_id']?>"><button class="del">
                    <span class="fa fa-trash-o rem"></span></button></a>
                </td>
      <?php
      }
      ?>
    </tr>
    </table>
  </div>
  </div>




  <div id="inbox" class="tabcontent inbox">

    <div class="messages">
      <table class="msgtable" border="1">
      <tr class="tr-head">

        <td class="sent">
          SENT BY  <span class="fa fa-user"></span>
        </td>
        <td>
          EMAIL  <span class="fa fa-envelope-o"></span>
        </td>
        <td>
          READ  <span class="fa fa-inbox"></span>
        </td>
        <td>
          DELETE </span>
        </td>
      </tr>

      <?php

      $query = "SELECT * FROM inbox order by msg_id DESC";

      $sql = mysqli_query($con, $query);

      while($row = mysqli_fetch_array($sql)){

      ?><tr class="tr-content">

    <td class="td">
        <a href="readmessage.php?id=<?php echo $row['msg_id'];?>"><?php echo $row['name'];?></a>
    </td>

    <td class="td">
        <a href=""><?php echo $row['email'];?></a>
    </td>

    <td class="view">
      <a href="readmessage.php?id=<?php echo $row['msg_id'];?>" >VIEW <span class="fa fa-inbox"></span></a>
    </td>

    <td class="td">
      <a href="deletemessage.php?id=<?php echo $row['msg_id'];?>" > <span class="fa fa-trash-o"></span></a>
    </td>

      </tr>

      <?php

      }

      ?>

    </div>

  </div>

  <div id="members" class="tabcontent members">

    <div class="members">

      <div class="hold-members">

    </div>
  </div>
    <script>

    function openlink(evt, linkName) {
        // Declare all variables
        var i, tabcontent, tablinks;

        // Get all elements with class="tabcontent" and hide them
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        // Get all elements with class="tablinks" and remove the class "active"
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }

        // Show the current tab, and add an "active" class to the button that opened the tab
        document.getElementById(linkName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
    </script>

</body>
</html>
