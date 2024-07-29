<?php
include '../../control/connection.php';
$examiner=$_GET['id'];
$exam=$_GET['exam'];
$sql = "SELECT * FROM exam where examiner='$examiner' and id=$exam ";
$result = $conn->query($sql);

$sql3 = "SELECT * FROM teachers where id= $examiner ";
$result3 = $conn->query($sql3);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>E_Attendance System</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="../assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/fonts/fontawesome5-overrides.min.css">
    <script src="../../assets/js/html2pdf.bundle.min.js"></script>
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-text mx-3"><span>E-Attendance</span></div>

                </a>
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link active" href="#"><i class="fa fa-book"></i><span>Dashboard</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="../../"><i class="fa fa-power-off"></i><span>Logout</span></a></li>
                </ul>
            </div>
        </nav>
        
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none  me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                    <button class="btn btn-outline-primary" onclick="location.href='./dashboard.php'">
<svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-backspace">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
        <path d="M20 6a1 1 0 0 1 1 1v10a1 1 0 0 1 -1 1h-11l-5 -5a1.5 1.5 0 0 1 0 -2l5 -5Z"></path>
        <path d="M12 10l4 4m0 -4l-4 4"></path>
    </svg>
                    </button>
                  </div>
                </nav>

                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0">Dashboard</h3><button class="btn btn-primary btn-sm" id="download">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cloud-download" viewBox="0 0 16 16">
                     <path d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383"/>
                     <path d="M7.646 15.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 14.293V5.5a.5.5 0 0 0-1 0v8.793l-2.146-2.147a.5.5 0 0 0-.708.708z"/>
                    </svg> 
                        Download Report
                        </button>
                    </div>
                </div>
                
                <div class="col">
                    <div class="card shadow mb-3">    
                        <div class="row mb-3">
                            <div class="container-fluid">
                                <div class="card shadow">
                                    <div class="card-body">
                                        <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                            <table class="table table-hover" id="table">
    <thead>
    <thead>
      <tbody>

  
<?php  
while($row3 = $result3->fetch_assoc()) {
  $teacher=$row3['name'];
}
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
<th scope="col" class="text-primary m-0 fw-bold"> Exam Details<br></th>
<th scope="col"></th>
</tr>
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
        <th scope="col" class="text-primary m-0 fw-bold"><br>Students Details</th>
        <th scope="col"></th>
        <th scope="col"></th>
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
    $i=1; 
 $sql1 = "SELECT * FROM attendance inner join exam on exam.id=attendance.exam where examiner=$examiner and exam.id=$exam";
 $result1 = $conn->query($sql1);
 while($row1 = $result1->fetch_assoc()) {
   $id=$row1['id'];
   $regno=$row1['registration_no'];
   $bookno=$row1['booklet_no'];
   $time=$row1['time'];
echo '
      <tr>
        <th scope="row">'.$i.'</th>
        <td>'.$regno.'</td>
        <td>'.$bookno.'</td>
        <td>'.$time.'</td>
      </tr> ';
      $i++;
 }

      ?>
    </tbody>
  </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © ifmstudents 2024</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/theme.js"></script>
    <script>
  document.querySelector('#download').onclick = function(){
    var element = document.querySelector('#table');
    html2pdf().from(element).save();
  }
</script>

</body>

</html>