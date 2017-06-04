<?php
include 'header.php';
?>
<h1>
    <center>FORM INPUT</center>
</h1>
<form class="form-horizontal" action="operator.php" method="POST">
<div class="container">
<div class="form-group">
    <label class="label-control col-sm-2">NAMA</label>
    <div class="col-sm-7">
        <input class="form-control" type="text" name="nama" id="" value="" required>
    </div>
</div>
<div class="form-group">
    <label class="label-control col-sm-2">TEMPAT LAHIR</label>
    <div class="col-sm-7">
        <input class="form-control" type="text" name="tmp_lahir" id="" value="" required>
    </div>
</div>
<div class="form-group">
    <label class="label-control col-sm-2">TGL LAHIR</label>
    <div class="col-sm-7">
        <input class="form-control" type="date" name="tgl_lahir" id="" value="" required>
    </div>
</div>
<div class="form-group">
    <label class="label-control col-sm-2">JENIS KELAMIN</label>
    <div class="col-sm-7">
        <select class="form-control" name="jekel" required>
            <option value="">PIlih Jenis Kelamin</option>
            <option value="L">L</option>
            <option value="P">P</option>
        </select>
    </div>
    </div>
<div class="form-group">
    <label class="label-control col-sm-2">ALAMAT</label>
    <div class="col-sm-7">
        <textarea class="form-control" rows="4" name="alamat" id="" value="" required></textarea>
    </div>
</div>
<div class="form-group">
    <label class="label-control col-sm-2">TELEPON</label>
    <div class="col-sm-7">
        <input class="form-control" type="number" name="telepon" id="" value="" required>
    </div>
    </div>
<div class="form-group">
        <button type="submit" class="btn btn-sm btn-warning" name="submit" id="" value="add" >SAVE</button>
</div>
</div>
</form>
<?php
include 'footer.php';
?>