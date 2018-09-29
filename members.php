<?php require 'kgcon.php';?>
<!DOCTYPE>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="styles/tabs.css">
  <link rel="stylesheet" type="text/css" href="styles/admin.css">
  <link rel="stylesheet" type="text/css" href="fontawesome-4.3.0.min.css">

    <link rel="stylesheet" type="text/css" href="styles/home.css">
  <link rel="stylesheet" type="text/css" href="styles/members.css">
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
      <!-- <button class="tablinks nav-b" onclick="openlink(event, 'members')">MEMBERS </button> -->
      <a href="admin.php"><button class="nav-b" >HOME <span class="fa fa-home"></span></button></a>
      <a href="signout.php"><button class="nav-b" >SIGN OUT <span class="fa fa-sign-out"></span></button></a>
  </div>
  <!-- Tab content -->
  <div class="members">
      <div class="hold-members" >
        <div class="msgs">
        <table class="table" border="1">
        <tr class="tr-head">

          <td class="sent">
             <span class="fa fa-picture-o "></span>
          </td>
          <td>
               <span class="fa fa-user"></span><br/>SURNAME
          </td>
          <td>
               <span class="fa fa-user"></span><br/>FIRSTNAME
          </td>
          <td>
               <span class="fa fa-user"></span><br/>LASTNAME
          </td>

          <td>
             <span class="fa fa-users"></span><br/>MARITAL STATUS

          </td>
          <td>
            <span class="fa fa-male"></span> - <span class="fa fa-female"></span><br/>GENDER
        </td>

        <td>
           <span class="fa fa-calendar"></span><br/>DoB
      </td>

          <td>
          <span class="fa fa-map-marker"></span><br/>POB
          </td>

          <td>
             <span class="fa fa-map-marker"></span><br/>LGA
          </td>

          <td>
             <span class="fa fa-map-marker"></span>SOG
          </td>

          <td>
             <span class="fa fa-flag"></span>NATIONALITY
          </td>

          <td>
          <span class="fa fa-phone"></span> <br/>PHONE
          </td>

          <td>
          <span class="fa fa-envelope-o"></span><br/>e-MAIL
          </td>

          <td>
          <span class="fa fa-map-marker"></span> ADDRESS
          </td>

          <td>
          <span class="fa fa-pencil-square-o"></span> EDIT
          </td>

          <td>
          <span class="fa fa-trash-o"></span> DELETE
          </td>

        </tr>

        <?php

        $query = "SELECT * FROM members order by members_id DESC";

        $sql = mysqli_query($con, $query);

        while($row = mysqli_fetch_array($sql)){

        ?><tr class="tr-content">

      <td class="td">
        <?php echo "<img src='members/" .$row['passport']."' class='t-imgs'>"; ?>

      </td>

      <td class="td">
          <?php echo $row['surname'];?>
      </td>

      <td class="td">
          <?php echo $row['first_name'];?>
      </td>

      <td class="td">
          <?php echo $row['othername'];?>
      </td>

      <td class="view">
        <?php echo $row['marital_status'];?>
      </td>

      <td class="td">
        <?php echo $row['gender'];?>
      </td>

      <td class="td">
        <?php echo $row['dob'];?>
      </td>

      <td class="td">
        <?php echo $row['pob'];?>
      </td>

      <td class="td">
        <?php echo $row['lga'];?>
      </td>

      <td class="td">
        <?php echo $row['sog'];?>
      </td>

      <td class="td">
        <?php echo $row['nationality'];?>
      </td>

      <td class="view">
        <?php echo $row['tel'];?>
      </td>

            <td class="td">
              <?php echo $row['email'];?>
            </td>
      <td class="view">
        <?php echo $row['contact_address'];?>
      </td>

      <td class="td">
        <a href="edituser.php?members_id=<?php echo $row['members_id'];?>" > <span class="fa fa-pencil"></span></a>
      </td>


      <td class="td">
        <a href="deleteuser.php?members_id=<?php echo $row['members_id'];?>" > <span class="fa fa-trash-o"></span></a>
      </td>

        </tr>

        <?php

        }

        ?>

      </div>
  </div>
</div>

</body>
</html>
