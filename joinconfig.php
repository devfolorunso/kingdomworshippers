<?php require 'kgcon.php';
if(isset($_POST) && !empty($_POST)){
extract($_POST);
extract($_FILES);
// $genpass = (mt_rand(0,62018));
// $pass= "CiT" .$genpass ."HUB";
$uploadfile = $_FILES["passport"]["tmp_name"];
$target = "members/".basename ($_FILES ['passport']['name']);
$ipassport = $_FILES['passport']['name'];
move_uploaded_file( $uploadfile , $target );
$query = "INSERT INTO members
(surname, first_name, othername, passport, gender, marital_status, dob, pob, lga, sog, nationality,
   contact_address, email,  tel)
VALUES
('$surname', '$first_name', '$othername', '$ipassport', '$gender','$marital_status', '$dob', '$pob', '$lga', '$sog', '$nationality', '$contact_address', '$email',  '$tel')";
if (mysqli_query($con, $query)){
  echo "<p>REGISTRATION SUCCESSFUL!!!</p>";
}
else{
echo "<font color='#660000'>Error!!! NOT REGISTERED</font> " . mysqli_error($con);
}
}


mysqli_close($con);


 ?>
