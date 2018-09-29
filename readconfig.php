<?php require 'kgcon.php';
if (isset($_GET['id'])) {
  # code...
  $id = $_GET['id'];
}
  $query="SELECT * from inbox where msg_id ='$id' ";
  $sql = mysqli_query($con,$query);
  $row =mysqli_fetch_array($sql);
  
?>
