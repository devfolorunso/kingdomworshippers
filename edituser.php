<?php require 'kgcon.php';?>
<!DOCTYPE>
<html>
  <head>
    <title>...
      JOIN US</title>
      <link rel="stylesheet" type="text/css" href="fontawesome-4.3.0.min.css">

    <link rel="stylesheet" type="text/css" href="styles/join-us.css">
      <!-- <link rel="shortcut icon" href="favico.ico" type="image/x-icon"> -->
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
      </div><button class="watch-us"><a href="https://youtube.com">WATCH US  <span class="fa fa-youtube " aria-hidden="hidden"></span> </a></button>

</div>
</div>
<div class="top"></div>

<!--LOGO AND KWORSHIPPERS  ENDS HERE!!-->
<!-- <div class="top-two"></div> -->
<!-- <div class="header">
  <h1>JOIN THE KINGDOM KWORSHIPPERS WORLDWIDE</h1>
  <p>KNOWLEDGE FOR DEVELOPMENT</p>
</div>

  <div class="navs">
    <a href="home.php">HOME</a>
    <marquee>WELCOME!!! KINDLY FILL THE FORM BELOW CORRECTLY! - KGW </marquee>
</div> -->



<?php  if (isset($_GET['members_id'])) {
    $members_id = $_GET['members_id'];
    $query = "SELECT * from members where members_id ='$members_id ' ";


  $sql = mysqli_query($con,$query);

 $row = mysqli_fetch_array($sql);?>


  <form method="POST" class="form" enctype="multipart/form-data">
    <div class="form-wrapper">
      <div class="user">
        <!-- CONFIH FILE HERE!!! -->


        <?php



        if(isset ($_POST) && !empty($_POST)){
          extract($_POST);

        // $fullname = $_POST ['fullname'];
        // 	$email = $_POST ['email'];
        // 		$matric = $_POST ['matric_no'];
        // 		$fone = $_POST ['phone_no'];
        // 			$fn = $_POST [''];

        $up = "UPDATE members SET surname='$surname', first_name= '$first_name', othername='$othername', marital_status='$marital_status', gender= '$gender', dob ='$dob', pob='$pob', sog='$sog', nationality='$nationality', tel='$tel', email='$email', contact_address='$contact_address' WHERE members_id='$members_id' ";


          if (mysqli_query($con,$up)){
          $result= $surname. "  DETAILS HAS BEEN SUCCESSFULLY EDITTED!!!";
          } else{
          echo "Error!!! Unable To Connect!!" .mysqli_error($con);
          }
          }





         ?>

        <?php echo $result;?>

        </div>
        <div class="wrapper-left">
      <label>EDIT SURNAME</label>
      <input type="text"  value="<?php echo $row['surname'];?>"  name="surname" required/><br/>
      <label>EDIT FIRSTNAME</label  ><br/>
      <input type="text"  value="<?php echo $row['first_name'];?>" name="first_name" required/><br/>
      <label>EDIT OTHERNAMES</label><br/>
      <input type="text"  value="<?php echo $row['othername'];?> " name="othername" required/><br/>
      <label>CHANGE PASSPORT</label><br/>
      <input type="file" name="passport" id="uploadFile"  value="uploadFile"/><br/>
      <label> Gender</label><br/>
      <input type="text"  value="<?php echo $row['gender'];?> " name="gender" required/><br/>

  <br/><label>Marital Status</label><br/>
  <input type="text"  value="<?php echo $row['marital_status'];?> " name="marital_status" required/><br/>

  <label>YOUR DATE OF BIRTH</label><br/>
  <input type="text"  value="<?php echo $row['dob'];?>" name="dob" required/><br/>
</div>


  <div class="wrapper-right">
    <label> YOUR PLACE OF BIRTH</label><br/>
    <input type="text" value="<?php echo $row['pob'];?>" name="pob" required/><br/>

    <label>LOCAL GOVERNMENT AREA</label><br/>
    <input type="text" value="<?php echo $row['lga'];?>" name="lga" required/><br/>

  <label>STATE OF ORIGIN</label>
  <input type="text" value="<?php echo $row['sog'];?>" name="sog" required/>

  <label>NATIONALITY</label><br/>
  <input type="text" value="<?php echo $row['nationality'];?>" name="nationality" required/><br/>

  <label>CONTACT ADDRESS</label></br/>
  <input type="text"  value="<?php echo $row['contact_address'];?>" name="contact_address" required/><br/>
  <label>YOUR EMAIL</label><br/>
  <input type="email"  value="<?php echo $row['email'];?>" name="email" required/><br/>
  <label>YOUR TELEPHONE NUMBER</label><br/>
  <input type="tel"  value="<?php echo $row['tel'];?>" name="tel" required/><br/>
  <button type="reset" class="cont-rght">RESET</button>

  <!-- <label>NEXT OF KIN</label><br/>
  <input type="text"  placeholder="NEXT OF KIN" name="next_of_kin" required/><br/>
  <label>NEXT OF KIN'S TELEPHONE NUMBER</label><br/>
  <input type="tel"  placeholder="NEXT OF KIN'S TELEPHONE NUMBER" name="nok_tel" required /><br/> -->
    <!-- <label class="prog-label">Programme</label><br/>
  <select name="programme" class="cat-prog">
    <option value="full-time">Full Time</option>
    <option value="part-time">Part Time</option>
    <option value="diploma">Diploma</option>
    <option value="pdg">Pre Degree</option>
  </select>
<br/>
  <label class="corse-label">Courses</label><br/>
  <select name="department" class="cat-course">
    <option value="comscience">Computer Science</option>
    <option value="computer-eng">Computer Enginneering</option>
    <option value="data-science">Data Science</option>
    <option value="statistics">Mathematics & Statistics</option>
  </select> -->
</div>
<div class="wrapper-cent">

  <button type="submit">SUBMIT</button>
</div>
<div class="clearboth"></div>

<?php }?>

</div>

</form>
<div class="navs">
  <a href="#"><button class="nav-b-one">HOME</button></a>
    <a href="join-us.php"><button class="nav-b">JOIN US</button></a>
      <a href="#contact"><button class="nav-b">CONTACT</button></a>
      <a href="#sponsors"><button class="nav-b">SPONSORS</button></a>
</div>
</body>
</html>
