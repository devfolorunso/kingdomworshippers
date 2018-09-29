<!DOCTYPE>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="styles/home.css">
  <link rel="stylesheet" type="text/css" href="styles/tabs.css">
    <link rel="stylesheet" type="text/css" href="fontawesome-4.3.0.min.css">
    <link rel="stylesheet" type="text/css" href="styles/animate.css">
<title>...KingDom Worshipers</title>
<?php require 'kgcon.php';?>
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

<!--LOGO AND KWORSHIPPERS  ENDS HERE!!-->
<div class="top-two"></div>

  <!-- SLIDER STARTS HERE!!!!  -->
  <div class="slider">
        <div class="myslides" id="captionText">
          <img src="media/kws-three.jpeg" class="slide-img">
          <div class="caption-slider">
            <p class="kgws-two">KingDom Worshipers Worldwide</p>
            <button class="proceed">
              <a href="#tabs"><img src="media/arrow.png" width="30" hieght="30" ></a>
              <!-- <div class="utube"><i class="fa fa-youtube" aria-hdden="true"></div> -->
            </button>
          </div>
        </div>

        <div class="myslides" id="captionText">
          <img src="media/kws-two.jpeg" class="slide-img">
          <div class="caption-slider">
            <button class="proceed">
              <a href="#tabs"><img src="media/arrow.png" width="20" hieght="20" ></a>
            </button>
            </div>
        </div>

        <div class="myslides" id="captionText">
        <img src="media/kws-one.jpeg" class="slide-img">
        <div class="caption-slider">
          <button class="proceed">
            <a href="#tabs"><img src="media/arrow.png" width="20" hieght="20" ></a>
          </button>
          </div>
        </div>

      <div class="myslides" id="captionText">
        <img src="media/kws-four.jpeg" class="slide-img">
        <div class="caption-slider">
          <button class="proceed">
            <a href="#tabs"><img src="media/arrow.png" width="20" hieght="20" ></a>
          </button>
          </div>
        </div>

          <div class="myslides" id="captionText">
            <div class="caption-slider-one">
              <p class="kgws">KingDom Worshipers Worldwide</p>
              <button class="proceed">
                <a href="#tabs"><img src="media/arrow.png" width="20" hieght="20" ></a>
              </button>
            </div>
          </div>
      </div>


        <a class="prev" onclick="plusSlides(-1)"> < </a>
        <a class="next" onclick="plusSlides(1)"> > </a>
        <div style="text-align:center" class="dot-cover">
        <span class="dots" onclick="currentSlide(1)"></span>
        <span class="dots" onclick="currentSlide(2)"></span>
        <span class="dots" onclick="currentSlide(3)"></span>
        <span class="dots" onclick="currentSlide(4)"></span>
      </div>
  </div>


  <script>
  var slideIndex = 1;
  showSlides(slideIndex);

  function plusSlides(n) {
  showSlides(slideIndex += n);
  }

  function currentSlide(n){
  showSlides(slideIndex = n);
  }

  function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName('myslides');
  var dots = document.getElementsByClassName('demo');
  var captionText = document.getElementById('caption');
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].classname = dots[i].classname.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].classname += " active";
  captionText.innetHTML = dots[slideIndex-1].alt;
  }
  </script>
<!-- slider ENDS HERE!!!-->


<!-- NAV BAR STARTS HERE!! -->
  <div class="navs">
    <a href="#"><button class="nav-b-one">HOME</button></a>
      <a href="join-us.php"><button class="nav-b">JOIN US</button></a>
        <a href="#contact"><button class="nav-b">CONTACT</button></a>
        <a href="#sponsors"><button class="nav-b">SPONSORS</button></a>
  </div>
<!-- NAV BAR ENDS HERE!!! -->




<div class="top"></div>

  <!-- Tab links -->
  <div class="tab" id="tabs">
    <button class="tablinks nav-b-one" onclick="openlink(event, 'about')" id="defaultOpen">ABOUT</button>
      <button class="tablinks nav-b" onclick="openlink(event, 'gallery')">GALLERY</button>
      <button class="tablinks nav-b" onclick="openlink(event, 'upcoming')">COMING UP <span class="fa fa-plus-circle"></span></button>
  </div>

  <!-- Tab content -->
  <div id="about" class="tabcontent about">
      <div class="mission-holder">
      <h1 class="hmission">..OUR MISSION</h1>
      <p class="pmission">Lorem ipsum dolor sit amet,
        consectetur adipisicing elit, sed do eiusmod tempor
         incididunt ut labore et dolore magna aliqua.<br/>
          Ut enim ad minim veniam, quis nostrud
           exercitation ullamco laboris nisi ut<br/>
            aliquip ex ea commodo consequat.
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
    <div class="vision-holder">
      <h1 class="hvision">...OUR VISSION</h1>
      <p class="pvision">Lorem ipsum dolor sit amet, consectetur adipisicing elit,<br/> sed do eiusmod tempor incididunt ut labore et dolore magna<br/> aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip<br/> ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
  </div>

  <div id="gallery" class="tabcontent gallery">
<div class="container">
  <?php
$query = "SELECT * FROM gallery order by photo_id desc";
$sql = mysqli_query($con,$query);
while ($row=mysqli_fetch_array($sql))
{
?>
      <div class="imgholder">
        <?php echo "<img src='galleria/" .$row['photo']."' class='imgs'>"; ?>
      </div>
<?php
 }
  ?>
    </div>
  </div>

  <div id="upcoming" class="tabcontent comingup">

    <div class="eventcont">
      <div class="count">
        <!-- Display the countdown timer in an element -->
        <p class="title"><img src="media/encounter.png" width="100%">

          <br/>FOR SEAT RESERVATION<br/>SPONSORSHIP AND ENQUIRIES<br/><a href="#contact">CONTACT US<span class="fa fa-caret-down"></span></a></p>
        <p class="time" id="count"></p>

        <script>
        // Set the date we're counting down to
        var countDownDate = new Date("NOV 09, 2018 19:00:00").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

          // Get todays date and time
          var now = new Date().getTime();

          // Find the distance between now and the count down date
          var distance = countDownDate - now;

          // Time calculations for days, hours, minutes and seconds
          var days = Math.floor(distance / (1000 * 60 * 60 * 24));
          var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
          var seconds = Math.floor((distance % (1000 * 60)) / 1000);

          // Display the result in the element with id="demo"
          document.getElementById("count").innerHTML = days + "Days " +  hours + " : "
          + minutes + " : " + seconds + "s ";

          // If the count down is finished, write some text
          if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
          }
        }, 1000);
        </script>

      </div>
      <div class="count">
        <?php
        $query = "SELECT event_photo from events order by event_id desc";
        $sql = mysqli_query($con,$query);
        $row = mysqli_fetch_array($sql);
        echo "<img src='eventsgallery/" .$row['event_photo']."' class='banner'>";
        // <img src="media/kws-six.jpeg" class="banner">
        ?>
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
</div>
<!-- TAB LINKS AND TAB CONTENTS ENDS HERE!! -->



<!-- FOOTER STARTS HERE!! -->
<div class="footer-area">
  <div class="sponsors" id="sponsors">
    <h1>SPONSORS</h1>
    <img src="media/4.png" class="spimg-one">
    <img src="media/5.jpg" class="spimg">
    <img src="media/kw.jpg" class="spimg">
    <img src="media/youth-2.jpeg" class="spimg">

  </div>
</div>

  <div class="top"></div>

  <div class="footer-area">
    <div class="footer-area-left" id="contact">
      <h1>KINGDOM WORSHIPERS WORLDWIDE</h1>
      <div class="social-icons-s">
      <a href="https:fb.com/kingdomworshippersworldwide"><span class="fa fa-facebook facebook" aria-hidden="true"></span></a>
      <a href="https:twitter.com/kingdom_worshippers_worldwide"><span class="fa fa-instagram ig" aria-hidden="true"></span></a>
      <a href="https:instagram.com/kingdomworshippersworldwide"><span class="fa fa-twitter twt" aria-hidden="true"></span></a>
    </div>
      <div class="social-icons">
        <span class="fa fa-phone fone" aria-hidden="true"></span><a href="tel:+2348166315790">+2348166315790</a>
      </div>
      <div class="social-icons">
        <span class="fa fa-phone fone" aria-hidden="true"></span><a href="tel:+2347066554195">+2347066554195</a>
      </div>
      <div class="social-icons">
        <span class="fa fa-phone fone" aria-hidden="true"></span><a href="tel:+2347066554195">+2347066554195</a>
      </div>

  </div>
  <div class="footer-area-right">
    <div class="formcont">
      <h1>SEND A MESAGE </h1>
    <p></p>

      <form method="POST">
        <input type="text"  placeholder="NAME" required name="name">
        <input type="email"  placeholder="E-MAIL" required name="email">
        <br/>
        <input type="text" name="tel" placeholder="Phone Number">
          <input type="hidden" value="<?php
        // ini_set('date.timezone', '(GMT+1:00)Lagos');
         echo date("D d M Y");?>"  name="date">
        <input type="hidden" value="<?php echo date("h:iA");?>"  name="time">
        <textarea name="msg" rows="8" cols="80" class="textarea"></textarea><br/>
        <button type="submit" class="btn">SUBMIT</button>
        <?php
        if(isset($_POST) && !empty($_POST)){

          foreach ($_POST as $key => $value)
      {
          $$key = $value;
      }

      extract($_POST);



      function insert($table, $data)
      {
        $con = new mysqli("localhost","root","","kgworshippers") or die("Connection failed");
        $query = "INSERT INTO ".$table."(";
          foreach($data as $key => $value)
          {
            $query .= $key.",";
          }

          $query = substr($query, 0, -1).") VALUES(";
          foreach($data as $key => $value)
          {
            $query .= "'".$value."',";
          }

          $query = substr($query, 0, -1).")";
          $con->query($query);

      }
      echo insert("inbox",$_POST);


      }

      ?>
      </form>
    </div>
  </div>
  <div class="clearboth"></div>
  </div>
</div>
<div class="footer">
      <p>&copy <?php echo date("Y");?> <a href="home.php">KINGDOM WORSHIPERS</a>
        Powered by <a href="home.php">KingDom WORSHIPERS</a></p>
      <a href="#top" id="#top"><img src="media/arrow1.png"></a>
</div>
<!-- FOOTER ENDS HERE!!! -->
