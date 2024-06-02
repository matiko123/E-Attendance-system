<?php
require_once 'connection.php';
$examiner=$_POST['id'];
$programme =$_POST['programme'];
$year =$_POST['year'];
$semester =$_POST['semester'];
$code =$_POST['code'];
$name =$_POST['name'];
$venue =$_POST['venue'];
$sql="insert into exam (examiner,programme,year,semester,code,name,venue) values('$examiner','$programme','$year','$semester','$code','$name','$venue') ";
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
  echo "<script>window.location.href='../view/id_scan/?id=$examiner';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>