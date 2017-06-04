<?php
include 'koneksi.php';
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
$sql = "SELECT * FROM tbl_login WHERE username ='".$username."' AND password='".$password."' ";
$res_login=mysqli_query($conn,$sql);
$count_login=mysqli_num_rows($res_login);
if($count_login >=1){
    $row_login=mysqli_fetch_array($res_login);
    $_SESSION[nama]=$row_login[1];
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=home.php">';
 }else{
     echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php">';
 echo "<script>
 alert('Login Gagal!!!');
 </script>
 ";
}

?>