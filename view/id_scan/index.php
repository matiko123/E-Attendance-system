
<?php
$id=$_GET['id'];
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
      <h5 class="card-title">Scan ID Barcode</h5>
      <div class="modal-footer">
        <button  class="btn btn-outline-success" onclick="window.location.href='../list/?id=<?php echo $id?>'">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-cloud-download" viewBox="0 0 16 16">
            <path d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383"/>
            <path d="M7.646 15.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 14.293V5.5a.5.5 0 0 0-1 0v8.793l-2.146-2.147a.5.5 0 0 0-.708.708z"/>
          </svg>
          View Students
        </button>
      </div>
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
      <a href="#" class="btn btn-outline-primary" onclick="myval()">
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
          <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
        </svg>
        Scan
      </a>
      <div class="container" id="val">IMC/BIT/11223344</div>
    </div>
  </div>
  <script>
    function myval(){
      var scanned = document.getElementById('val').innerHTML;
      console.log(scanned);
      window.location.href='../booklet_scan/?id='+scanned+'&teacher=<?php echo $id ?>';
    }
 

  </script>
</body>
</html>