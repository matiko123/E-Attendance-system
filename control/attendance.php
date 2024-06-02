<?php
require_once 'connection.php';
$id=$_POST['id'];
$regno =$_POST['regno'];
$bookno =$_POST['bookno'];
$sql="insert into attendance (registration_no,booklet_no) values('$regno','$bookno') ";
if ($conn->query($sql) === TRUE) {
  echo '<!DOCTYPE html>
  <html lang="en" >
  <head>
    <meta charset="UTF-8">
    <title>Please Wait...</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="../assets/dist/style.css">
  
  </head>
  <body>
  <div class="loading-container">
    <div class="loading-text">
      <span>L</span>
      <span>O</span>
      <span>A</span>
      <span>D</span>
      <span>I</span>
      <span>N</span>
      <span>G</span>
    </div>
  </div>
  </body>
  </html>';
   echo "<script>window.location.href='../view/id_scan/?id=$id';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>