<?php
require_once 'connection.php';
$exam=$_GET['exam'];
$regno =$_GET['id'];
$bookno =$_GET['bookno'];
$sql="insert into attendance (registration_no,booklet_no,exam) values('$regno','$bookno','$exam') ";
if ($conn->query($sql) === TRUE) {
  header('Location: ../view/id_scan/');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>