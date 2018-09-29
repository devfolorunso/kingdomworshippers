<?php
  $db_host="localhost";
  $db_username ="root";
  $db_password ="";
  $con = mysqli_connect($db_host,$db_username,$db_password);
  if (!$con){
    die("Connection Problem!!" .mysqli_connect_error());
  }
  $sql="CREATE DATABASE kgworshippers";
  if (mysqli_query($con, $sql)){
  }

  mysqli_select_db($con, "kgworshippers");

  $gallery="CREATE TABLE IF NOT EXISTS gallery (photo_id int(01) PRIMARY KEY AUTO_INCREMENT NOT NULL , photo text(50) NOT NULL, CHECK (photo_id between 1 and 9))";
  if (mysqli_query($con,$gallery)) {
  }else{
    echo"" .mysqli_error($con);
  }

  $events="CREATE TABLE IF NOT EXISTS events (event_id int(01) PRIMARY KEY AUTO_INCREMENT NOT NULL , event_photo text(50) NOT NULL)";
  if (mysqli_query($con,$events)) {
  }else{
    echo"" .mysqli_error($con);
  }

  $inbox ="CREATE TABLE IF NOT EXISTS
  inbox(msg_id int(3) PRIMARY KEY AUTO_INCREMENT NOT NULL, email varchar(50) NOT NULL, name varchar(50) NOT NULL, msg text(50) NOT NULL)";
  if (mysqli_query($con,$inbox)) {
  }

  $members ="CREATE TABLE IF NOT EXISTS members(
    members_id int(5) PRIMARY KEY AUTO_INCREMENT  NOT NULL,
    surname text(50) NOT NULL,
    first_name varchar(30) NOT NULL,
    othername varchar(35) NOT NULL,
    passport text(60) NOT NULL,
    gender varchar(10) NOT NULL,
    marital_status varchar(10) NOT NULL,
    dob  varchar(20) NOT NULL,
    pob  varchar(20) NOT NULL,
    lga  varchar(20) NOT NULL,
    sog  varchar(20) NOT NULL,
    nationality varchar(20) NOT NULL,
    contact_address varchar(20) NOT NULL,
    email text(50) NOT NULL,
    tel varchar(20) NOT NULL)";

    if (mysqli_query($con,$members)){}
    else{
    	echo "error". mysqli_error($con); }
?>
