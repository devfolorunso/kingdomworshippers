<?php
if(isset($_POST['btn'])){
  $uploadfile = $_FILES["photo"]["tmp_name"];
  $target = "galleria/".basename ($_FILES ['photo']['name']);
  $iphoto = $_FILES['photo']['name'];
  move_uploaded_file( $uploadfile , $target );
  $query ="INSERT INTO  gallery   (photo) VALUES('$iphoto')  ";
  if (mysqli_query($con,$query)) {
    # code...
    echo "
    <script>
    window.alert('PHOTO SUCCESSFULLY UPLOADED!!');
    </script>";
  }else {
    echo "error" .mysqli_error($con);
  }
}

  ?>
