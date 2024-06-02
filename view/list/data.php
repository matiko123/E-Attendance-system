<?php
// Connect to your database
include '../../control/connection.php';
$sql1 = "SELECT *from attendance";
$result1 = $conn->query($sql1);
$data1 = array();


if ($result1->num_rows > 0) {
    while($row1 = $result1->fetch_assoc()) {
        $data1[] = $row1;
    }
}

$sql2 = "SELECT * from exam";
$result2 = $conn->query($sql2);
$data2 = array();


if ($result2->num_rows > 0) {
    while($row2 = $result2->fetch_assoc()) {
        $data2[] = $row2;
    }
}

$sql3 = "SELECT *from exam";
$result3 = $conn->query($sql3);
$data3 = array();


if ($result3->num_rows > 0) {
    while($row3 = $result3->fetch_assoc()) {
        $data3[] = $row3;
    }
}
?>






