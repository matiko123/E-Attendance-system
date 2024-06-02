<?php
include '../../control/connection.php';
$examiner =$_GET['id'];
?>
<!doctype html>
<html lang="en">
  <head>
    <title>EAS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <script src="../../assets/js/html2pdf.bundle.min.js"></script>
</head>
<body>
<nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="#">E-Attendance System</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item item"><a class="nav-link active" href="#" id="download">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cloud-download" viewBox="0 0 16 16">
                     <path d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383"/>
                     <path d="M7.646 15.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 14.293V5.5a.5.5 0 0 0-1 0v8.793l-2.146-2.147a.5.5 0 0 0-.708.708z"/>
                    </svg>  
                    Download Report &nbsp;|</a></li>
                    <li class="nav-item item"><a class="nav-link " href="../../">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
  <div style="margin-top: 3cm;"></div>

  <div class="container">
<div class="shadow">
  <table class="table table-hover" id="table">
    <thead>
    <tr >
        <th scope="col">Exam Details</th>
        <th scope="col"></th>
   </tr>
    <thead>
      <tbody>

  
<?php  
$sql3 = "SELECT * FROM teachers where id= $examiner ";
$result3 = $conn->query($sql3);
while($row3 = $result3->fetch_assoc()) {
  $teacher=$row3['name'];
}
  $sql = "SELECT * FROM exam where examiner='$examiner'  order by date desc limit 1 ";
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()) {
    $programme=$row['programme'];
    $year=$row['year'];
    $semester=$row['semester'];
    $code=$row['code'];
    $name=$row['name'];
    $venue=$row['venue'];
    $date=$row['date'];
  
echo '
<tr >
<th scope="col">Supervisor</th>
<th scope="col">'.$teacher.'</th>
</tr>
    <tr>
      <th scope="col">Programme</th>
        <th scope="row">'.$programme.'</th>
      </tr>
      <tr>
        <th scope="col">Year</th>
        <td>'.$year.'</td>
      </tr>
      <tr>
      <th scope="col">Semester</th>
        <td>'.$semester.'</td>
      </tr>
      <tr>
      <th scope="col">Code</th>
        <td>'.$code.'</td>
      </tr>
      <tr>
      <th scope="col">Subject Namer</th>
        <td>'.$name.'</td>
      </tr>
      <tr>
      <th scope="col">Venue</th>
        <td>'.$venue.'</td>
      </tr>
      <tr>
      <th scope="col">Date</th>
        <td>'.$date.'</td>
      </tr> ';
 }

      ?>
    </tbody>
      <tr>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col"><br>Student Details</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <thead>
      <tr>
        <th scope="col">#Sno</th>
        <th scope="col">Registraion No</th>
        <th scope="col">Booklet No</th>
        <th scope="col">Time Scanned</th>
      </tr>
    </thead>
    <tbody>
    <?php   
 $sql1 = "SELECT * FROM attendance exam ";
 $result1 = $conn->query($sql1);
 while($row1 = $result1->fetch_assoc()) {
   $id=$row1['id'];
   $regno=$row1['registration_no'];
   $bookno=$row1['booklet_no'];
   $time=$row1['time'];
echo '
      <tr>
        <th scope="row">'.$id.'</th>
        <td>'.$regno.'</td>
        <td>'.$bookno.'</td>
        <td>'.$time.'</td>
      </tr> ';
 }
      ?>
    </tbody>
  </table>
  </div>
</div>
<script>
  document.querySelector('#download').onclick = function(){
    var element = document.querySelector('#table');
    html2pdf().from(element).save();
  }
</script>
</body>
</html>