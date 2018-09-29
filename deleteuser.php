<?php require 'kgcon.php';
if (isset($_GET['members_id'])) {
  # code...
  $members_id = $_GET['members_id'];
}
  $query="DELETE from members where members_id ='$members_id' ";
  if (mysqli_query($con,$query)) {
    # code...
    header('location:members.php');
  }
?>
