<!DOCTYPE>
<html>
  <head>
    <title>...
      JOIN US</title>
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




  <form method="POST" class="form" enctype="multipart/form-data">
    <div class="form-wrapper">
      <div class="user">
        <!-- CONFIH FILE HERE!!! -->
        <?php include 'joinconfig.php';?>
        </div>
        <div class="wrapper-left">
      <label>ENTER YOUR SURNAME</label>
      <input type="text"  placeholder="Enter Your Surname" name="surname" required/><br/>
      <label>ENTER YOUR FIRSTNAME</label><br/>
      <input type="text"  placeholder="Enter Your Firstname" name="first_name" required/><br/>
      <label>ENTER YOUR OTHERNAMES</label><br/>
      <input type="text"  placeholder="Enter Your Othernames" name="othername" required/><br/>
      <label>UPLOAD YOUR CLEAR PASSPORT</label><br/>
      <input type="file" name="passport" id="uploadFile"  value="uploadFile"/><br/>
      <label>Gender</label><br/>
      <input type="radio" name="gender" value="Male "class="radiom" checked="checked"/>Male
        <input type="radio" name="gender" value="Female" class="radiof" checked="checked"/>Female
  <br/><label>Marital Status</label><br/>
  <input type="radio" name="marital_status" value="Single "class="radiom" checked="checked"/>Single
  <input type="radio" name="marital_status" value="Married" class="radiof" checked="checked"/>Married<br/>
  <label>YOUR DATE OF BIRTH</label><br/>
  <input type="date"  placeholder="ENTER YOUR DATE OF BIRTH" name="dob" required/><br/>
  <label> YOUR PLACE OF BIRTH</label><br/>
  <input type="text" placeholder="ENTER YOUR PLACE OF BIRTH" name="pob" required/><br/>
</div>


  <div class="wrapper-right">
    <label>LOCAL GOVERNMENT AREA</label><br/>
    <input type="text" placeholder="LOCAL GOVERNMENT AREA" name="lga" required/><br/>

  <label>STATE OF ORIGIN</label>
  <input type="text" placeholder="STATE OF ORIGIN" name="sog" required/>

  <label>NATIONALITY</label><br/>
  <input type="text" placeholder="NATIONALITY" name="nationality" required/><br/>

  <label>CONTACT ADDRESS</label></br/>
  <input type="text"  placeholder="CONTACT ADDRESS" name="contact_address" required/><br/>
  <label>YOUR EMAIL</label><br/>
  <input type="email"  placeholder="YOUR EMAIL" name="email" required/><br/>
  <label>YOUR TELEPHONE NUMBER</label><br/>
  <input type="tel"  placeholder="YOUR TELEPHONE NUMBER" name="tel" required/><br/>
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
