<?php require 'kgcon.php';
if (isset($_GET['photo_id'])) {
  # code...
  $photo_id= $_GET['photo_id'];
}
$del="DELETE FROM gallery WHERE photo_id =('$photo_id')";
if (mysqli_query($con,$del)) {
  # code...
  header('location:admin.php');
}
 ?>
