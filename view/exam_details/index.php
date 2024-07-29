
<html>
    <head>
        <title>EAS</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    </head>
    <body>


<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap" id="trig" style="display: none;">Trigger me</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Fill In The Examination Informations</h1>
      </div>
      <div class="modal-body">
        <form action="../../control/exam.php" method="post">
          <input type="hidden" name="id" value="<?php echo $id ?>" >
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Programme :</label>
            <input type="text" class="form-control" id="recipient-name" name="programme" required>
          </div>
          <div class="row">
            <div class="col-md-4">
                <div class="row g-3 align-items-center">
                    <div class="col-auto">
                      <label for="inputPassword6" class="col-form-label">Year</label>
                    </div>
                    <div class="col-auto">
                        <div class="col-sm-10">
                            <select id="number" name="year">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                          </select>
                          </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ms-auto">
                <div class="row g-3 align-items-center">
                    <div class="col-auto">
                      <label for="semester" class="col-form-label">Semester</label>
                    </div>
                    <div class="col-auto">
                        <div class="col-sm-10">
                            <select id="number" name="semester">
                              <option value="1">1</option>
                              <option value="2">2</option>
                          </select>
                          </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Subject Code :</label>
            <input type="text" class="form-control" id="recipient-name" name="code" required>
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Subject Name :</label>
            <input type="text" class="form-control" id="recipient-name" name="name" required>
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Venue :</label>
            <input type="text" class="form-control" id="recipient-name" name="venue" required>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-outline-primary" >
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-check2-all" viewBox="0 0 16 16">
                    <path d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0"/>
                    <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708"/>
                  </svg>
                Done
              </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
    </body>
<script>
    document.addEventListener('DOMContentLoaded', function() {
      // Check if the URL contains 'abc.html'
      if (window.location.href.indexOf('exam_details') !== -1) {
          // Find the button with the ID 'trig'
          var button = document.getElementById('trig');
          if (button) {
              // Trigger the click event on the button
              button.click();
          }
      }
  });
</script>

</html>