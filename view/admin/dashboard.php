<?php
include '../../control/connection.php';

session_start();
if(!isset($_SESSION['id'])){
    header('Location : ../../');
}else{
    $examiner=$_SESSION['id'];
}
$sql = "SELECT exam.*,teachers.name as teacher ,teachers.id as teacher_id FROM exam inner join teachers on teachers.id=exam.examiner";
$result = $conn->query($sql);
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
                    <button class="btn btn-outline-primary" onclick="location.href='./'">
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
                        <h3 class="text-dark mb-0">Exam Details</h3>
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
      <tr>
        <th scope="col">#Sno</th>
        <th scope="col">Examiner</th>
        <th scope="col">Course</th>
        <th scope="col">Year</th>
        <th scope="col">Semester</th>
        <th scope="col">Code</th>
        <th scope="col">Name</th>
        <th scope="col">Venue</th>
        <th scope="col">Date</th>
        <th scope="col">View</th>
      </tr>
    </thead>
    <tbody>
    <?php  
    $i=1; 
 while($row = $result->fetch_assoc()) {
   $exam_id=$row['id'];
   $examiner=$row['teacher'];
   $examiner_id=$row['teacher_id'];
   $programme=$row['programme'];
   $year=$row['year'];
   $semester=$row['semester'];
   $code=$row['code'];
   $name=$row['name'];
   $venue=$row['venue'];
   $date=$row['date'];
echo '
      <tr>
        <th scope="row">'.$i.'</th>
        <td>'.$examiner.'</td>
        <td>'.$programme.'</td>
        <td>'.$year.'</td>
        <td>'.$semester.'</td>
        <td>'.$code.'</td>
        <td>'.$name.'</td>
        <td>'.$venue.'</td>
        <td>'.$date.'</td>
        <td><button class="btn btn-primary" onclick="location.href=\'exams.php?id='.$examiner_id.'&exam='.$exam_id.'\'">View</button></td>       
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
</body>

</html>