<html>
    <?php
    session_start();

    include 'header.php';  
    include 'koneksi.php';
  ?>
<body>
     <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">DATANGI KAMPUS</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="home.php">Home</a></li>
                <li><a href="#">About Us</a></li>
                 <li><a href="input.php">Input Data</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                  <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php print $_SESSION['nama'];?></a></li>
                  <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Sign Out</a></li>
            </ul>
        </div>
    </nav>
    <div style="background: transparent" class"jumbotron">
        <h4><center> DATA MAHASISWA</center></h4>
    </div>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th></th>
        <th>NO</th>
        <th>NPM</th>
        <th>Nama</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>Telepon</th>
        <th>MENU</th>
      </tr>
    </thead>
    <tbody>
        <?php
    $sql="SELECT * FROM tbl_mhs ORDER BY npm ASC";
    $result=mysqli_query($conn,$sql);
    $i=0;
    while($row=mysqli_fetch_array($result)){
      $i++;
      ?>
      <tr>
        <td></td>
        <td><?php print $i;?></td>
        <td><?php print $row[0];?></td>
        <td><?php print $row[1];?></td>
        <td><?php print $row[2];?></td>
        <td><?php print $row[3];?></td>
        <td><?php print $row[4];?></td>
        <td><?php print $row[5];?></td>
        <td><?php print $row[6];?></td>
        <td>
        <a class="btn btn-sm btn-primary" href="edit.php?id=<?php print $row[0];?>"><span class="glyphicon glyphicon-pencil"></span>EDIT</a>
         || <a class="btn btn-sm btn-danger" href="delete.php?id=<?php print $row[0];?>"><span class="glyphicon glyphicon-remove"></span>DELETE</a>
         </td>
      </tr>
      <?php
    }
    ?>

    </tbody>
    </table>
    </div>

    <?php
    include 'footer.php';
?>