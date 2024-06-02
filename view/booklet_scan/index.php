<?php
$teacher =$_GET['teacher'];
$regno =$_GET['id'];
$bookno=12123322;
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
</head>
<body class="container">
  <div class="card text-center">
    <div class="card-body">
      <h5 class="card-title">Scan Booklet Barcode</h5>
      <p class="card-text">
        <div class="container text-center">
          <div class="row align-items-center">
            <div class="col">
            </div>
            <div class="col">
                <div class="ratio ratio-1x1 opacity-50">
                <div>
                  <img src="../../assets/images/camera.jpg" class="img-fluid " alt="...">
                </div>
              </div>
            </div>
            <div class="col">
            </div>
          </div>
        </div>
      </p>
      <form action ="../../control/attendance.php" method ="post" >
        <input type="hidden" value="<?php echo $regno ?>" name="regno">
        <input type="hidden" value="<?php echo $bookno ?>" name="bookno">
        <input type="hidden" value="<?php echo $teacher ?>" name="id">
      <button type="submit" class="btn btn-outline-primary" >
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
          <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
        </svg>
        Scan
</button>
      <div class="container">12123322</div>
    </div>
  </div>
</body>
</html>