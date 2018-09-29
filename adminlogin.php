<?php require 'kgcon.php';?>
<!DOCTYPE>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="adminlogin.css">
  <title>Kindly Login To Continue</title>
  <script type="text/javascript">
function validate()
{
  var username = document.login.username.value;
  var password = document.login.password.value;

  if (username == null || username == "")
  {
    alert("username can't be blank");
    return false;
  }
  elseif (password = null || password =="")
  {
    alert("password cant be blank");
    return false;
  }
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
<div class="top"></div>


<div class="container">
<form name="login" method="POST" onsubmit="return validate();">
      <label>ENTER USERNAME</label>
    <input type="username" name="username" placeholder="USERNAME"/>
    <br/>
    <label>ENTER YOUR PASSWORD</label>
        <input type="password" name="password" placeholder="Password"/>
        <button type="submit">Login</button>
</form>
    <?php require 'adminconfig.php';?>
</div>
</body>
</html>
