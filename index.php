<html>
<?php
include 'header.php';
?>
<body style="background:url('image/sekolah.jpg')  center center fixed">
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">DATANGI KAMPUS</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="#">About Us</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
            <li><form action="log.php" method="POST" style="margin-top: 10px" class="form-inline"> 
           <div class="form-group">
            <input class="form-control" type="text" placeholder="USERNAME" name="username">
            <input class=form-control type="password" placeholder="PASSWORD" name="password">
            <button class="btn btn-lg" name="submit" type="submit" value="submit"><span class="glyphicon glyphicon-log-in"></span> Login</button>
            </div>
            </form>
            </li>
                  <li><a class="btn btn-lg" href="singup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            </ul>
        </div>
    </nav>
    <div class="conainer">
        <div style="background: transparent" class="jumbotron">
            <h1 style="color: #960579;"><center><b>SELAMAT DATANG DI HALAMAN<br> DATANGI KAMPUS</b></cneter></h1>
        </div>
    </div>
<?php
include 'footer.php';
?>