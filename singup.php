<html>

<head>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
  <h3>
    <center>SIGN UP <br>Bergabung di Datangi Kampus</center>
  </h3>
  <div class="container">

    <div class="row">
      <div class="col-sm-4"></div>
      <div style="background-color: bisque" class="col-sm-4">
        <h3>
          <center>FORM SIGN UP</center>
        </h3>
        <form class="form-horizontal" action="signup_o.php" method="POST">
          <div class="form-group">
            <label class="lable-control col-sm-3">NAMA LENGKAP</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="nama_pengguna" id="" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="lable-control col-sm-3">USER NAME</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="username" id="" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="lable-control col-sm-3">PASSWORD</label>
            <div class="col-sm-7">
              <input type="password" class="form-control" name="password" id="" value="">
            </div>
          </div>
          <div class="row">
            <div class="col-sm-5"></div>
            <div class="col-sm-4">
              <div class="form-group">
                <input type="submit" name="submit" value="SINGUP" class="btn btn-primary">
              </div>
            </div>
          </div>
        </form>

      </div>
    </div>
  </div>
</body>

</html>