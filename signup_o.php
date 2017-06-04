<?php 
include 'koneksi.php';

$data=array($_POST['nama_pengguna'],$_POST['username'],$_POST['password']);
$sql="INSERT INTO tbl_login (id_login,nama_pengguna,username,password) VALUES (
'',
'".$data[0]."',
'".$data[1]."',
'".$data[2]."'
)";
//print $sql;
 $res_signUp=mysqli_query($conn,$sql);
  echo "<script>
  alert('DATA TELAH DI TAMBAH');
  </script>
  ";

 echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php">';
?>