<?php
if(isset($_POST['btn'])){
  $uploadfile = $_FILES["event_photo"]["tmp_name"];
  $target = "eventsgallery/".basename ($_FILES ['event_photo']['name']);
  $iphoto = $_FILES['event_photo']['name'];
  move_uploaded_file( $uploadfile , $target );
  $query ="INSERT INTO  events  (event_photo) VALUES('$iphoto')  ";
  if (mysqli_query($con,$query)) {
    # code...
    echo "
    <script>
    window.alert('PHOTO SUCCESSFULLY UPLOADED TO EVENTS!!');
    </script>";
  }else {
    echo "error" .mysqli_error($con);
  }
}

  ?>
