<!DOCTYPE>
<html>
<head>
  <title>...CPANEL</title>
  <?php require 'kgcon.php';?>
  <link rel="stylesheet" type="text/css" href="styles/tabs.css">
  <link rel="stylesheet" type="text/css" href="styles/admin.css">
    <link rel="stylesheet" type="text/css" href="styles/home.css">
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
<div class="tab" id="tabs">
    <a href="admin.php"><button class="nav-b" >GO BACK TO CPanel <span class="fa fa-home"></span></button></a>
</div>

<div id="events" class="tabcontent upload">
  <div class="container">
    <div class="contain">-
    <form method="POST" enctype="multipart/form-data">
      <input type="file" name="event_photo" id="uploadFile"  value="uploadFile"/><br/>
      <button type="submit" name="btn" class="button">UPLOAD</button>
    </form>
  </div>
  <?php require 'eventsconfig.php';?>
  </div>

<div class="table">
<table border="1">

  <tr>
    <td> S/N</td>
    <td> IMAGE</td>
    <td>DELETE</td>
  </tr>
  <?php
$query = "SELECT * FROM events  ORDER BY event_id DESC";
$sql = mysqli_query($con,$query);
while ($row=mysqli_fetch_array($sql))
{
?>
<tr>
   <td>
          <?php echo $row['event_id'];?>
        </td>

        <td>
              <?php echo "<img src='eventsgallery/" .$row['event_photo']."' class='t-imgs'>"; ?>
          </td>

          <td>
              <a href="deleteevent.php?event_id=<?php echo $row['event_id']?>"><button class="del">
                <span class="fa fa-trash-o rem"></span></button></a>
            </td>
  <?php
  }
  ?>
</tr>
</table>
</div>
</div>
</div>















</div>
