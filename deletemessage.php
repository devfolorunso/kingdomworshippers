<?php require 'kgcon.php';
if (isset($_GET['id'])) {
  # code...
  $id = $_GET['id'];
}
  $query="DELETE from inbox where msg_id ='$id' ";
  if (mysqli_query($con,$query)) {
    # code...
    header('location:admin.php');
  }
?>
