<?php
// Include the connection file
require_once 'connection.php';

$email = $_POST['email'];;
$passwd = $_POST['password'];

// Retrieve image path from the database
$sql = "SELECT * FROM teachers where email='$email' and password='$passwd'";
$result = $conn->query($sql);
while($row1 = $result->fetch_assoc()) {
  $id=$row1['id'];
}
if ($result->num_rows > 0) {
    echo '<!DOCTYPE html>
    <html lang="en" >
    <head>
      <meta charset="UTF-8">
      <title>CodePen - Loading Text Animation</title>
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
    echo "<script>window.location.href='../view/exam_details/?id=$id';</script>";
   }
   else{
    echo "<script>window.location.href='../?auth_no';</script>";
   }
?>