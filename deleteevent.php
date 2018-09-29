<?php require 'kgcon.php';
if (isset($_GET['event_id'])) {
  # code...
  $event_id= $_GET['event_id'];
}
$del="DELETE FROM events WHERE event_id =('$event_id')";
if (mysqli_query($con,$del)) {
  # code...
  header('location:event.php');
}
 ?>
