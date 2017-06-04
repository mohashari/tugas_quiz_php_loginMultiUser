<?php
include 'header.php';
include 'koneksi.php';
$id=$_GET[id];
//print $id;
$sql="SELECT * FROM tbl_mhs WHERE npm='".$id."'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
?>
<h1>
    <center>FORM EDIT</center>
</h1>
<form class="form-horizontal" action="operator.php" method="POST">
<div class="container">
<div class="form-group">
    <label class="label-control col-sm-2">ID</label>
    <div class="col-sm-7">
        <input class="form-control" type="text" name="id" id="" value="<?php print $row[0];?>" readonly>
    </div>
</div>
<div class="form-group">
    <label class="label-control col-sm-2">NAMA</label>
    <div class="col-sm-7">
        <input class="form-control" type="text" name="nama" id="" value="<?php print $row[1];?>" required>
    </div>
</div>
<div class="form-group">
    <label class="label-control col-sm-2">TEMPAT LAHIR</label>
    <div class="col-sm-7">
        <input class="form-control" type="text" name="tmp_lahir" id="" value="<?php print $row[2];?>" required>
    </div>
</div>
<div class="form-group">
    <label class="label-control col-sm-2">TGL LAHIR</label>
    <div class="col-sm-7">
        <input class="form-control" type="date" name="tgl_lahir" id="" value="<?php print $row[3];?>" required>
    </div>
</div>
<div class="form-group">
    <label class="label-control col-sm-2">JENIS KELAMIN</label>
    <div class="col-sm-7">
        <select class="form-control" name="jekel" required>
            <option><?php print $row[4];?></option>
            <option value="">PIlih Jenis Kelamin</option>
            <option value="Laki - Laki">Laki - Laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
    </div>
    </div>
<div class="form-group">
    <label class="label-control col-sm-2">ALAMAT</label>
    <div class="col-sm-7">
        <textarea class="form-control" rows="4" name="alamat" id=""  required><?php print $row[5];?></textarea>
    </div>
</div>
<div class="form-group">
    <label class="label-control col-sm-2">TELEPON</label>
    <div class="col-sm-7">
        <input class="form-control" type="number" name="telepon" id="" value="<?php print $row[6];?>" required>
    </div>
    </div>

<div class="form-group">
        <button type="submit" class="btn btn-sm btn-warning" name="submit" id="" value="edit" >EDIT</button>
    
</div>
</div>
</form>
<?php
include 'footer.php';
?>