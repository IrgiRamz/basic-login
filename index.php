<!-- 
  SOAL : 
  1. lengkapi atribute pada form login dibawah ini agar dapat digunakan untuk mengirim data 
-->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Program Latihan | VSGA Kominfo 2021</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
  <link rel="stylesheet" href="fontawesome/css/all.min.css">
  <style>
    .m-b-10 {
      padding-bottom: 10px;
    }
  </style>
</head>
<body>
    <div class="container">
      <div class="row justify-content-center mt-5">
        <div class="col-md-4">
          <div class="card">
            <div class="card-header bg-transparent mb-0"><h5 class="text-center">FORM <span class="font-weight-bold text-primary">LOGIN</span></h5></div>
            <div class="card-body">
              <form action="login.php" class="form-horizontal" method="POST">
                <div class="form-group m-b-10">
                  <label for="username">Username</label>
                  <input type="text" name="username" data-role="input" class="form-control" placeholder="Username">
                </div>
                <div class="form-group m-b-10">
                  <label for="username">Password</label>
                  <input type="password" name="password" data-role="input" class="form-control" placeholder="Password">
                </div>
                <div class="form-group m-b-10">
                  <button type="submit" name="login" class="btn btn-primary">Login</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
<script src="assets/js/bootstrap.js"></script>
</html>