<?php 
include 'koneksi.php';
$sqlx = "SELECT * FROM tbl_mhs ORDER BY npm DESC";
$resultx = mysqli_query($conn, $sqlx);
$countx = mysqli_num_rows($resultx);

if ($countx <= 0 ){
	$id = "mh0001";
}
else {
	$rowx = mysqli_fetch_array($resultx);
	$tmpRow = $rowx[0];
	// 	$tmpRow = "tr9999";
	$tmp1 = substr($tmpRow, 0, 2);
	$tmp2 = substr($tmpRow, 2, 4);
	if ($tmp2 < 9){
		$tmp2++;
		$id = $tmp1."000".$tmp2;
	}
	else if ($tmp2 >= 9 and $tmp2 < 99){
		$tmp2++;
		$id = $tmp1."00".$tmp2;
	}
	else if ($tmp2 >= 99 and $tmp2 < 999){
		$tmp2++;
		$id = $tmp1."0".$tmp2;
	}
	else if ($tmp2 >= 999 and $tmp2 < 9999){
		$tmp2++;
		$id = $tmp1.$tmp2;
	}
}
?>
<?php
if(isset($_POST['submit'])){
	$submit=$_POST['submit'];
	$id2=$_POST[id];
	$data=array($id,$_POST[nama],$_POST[tmp_lahir],$_POST[tgl_lahir],$_POST[jekel],$_POST[alamat],$_POST[telepon]);
if($submit == 'add'){
		$sql="INSERT INTO tbl_mhs (npm,nama,tmpt_lhr,tgl_lhr,jekel,almt,tlp)
 VALUES(
 '".$data[0]."',
 '".$data[1]."',
 '".$data[2]."',
 '".$data[3]."',
 '".$data[4]."',
 '".$data[5]."',
 '".$data[6]."') ";
		mysqli_query($conn,$sql);
       echo '<META HTTP-EQUIV="Refresh" Content="0; URL=home.php">';
	}
	else if($submit == 'edit'){
		$sql="UPDATE tbl_mhs SET nama='".$data[1]."',tmpt_lhr='".$data[2]."',tgl_lhr='".$data[3]."',jekel='".$data[4]."',
    almt='".$data[5]."',tlp='".$data[6]."' WHERE npm='".$id2."' ";
		mysqli_query($conn,$sql);
		//print $sql;
		echo '<META HTTP-EQUIV="Refresh" Content="0; URL=home.php">';
	}else if ($submit == 'delete'){
		$sql="DELETE FROM tbl_mhs WHERE npm='".$id2."'";
		mysqli_query($conn,$sql);
		move_uploaded_file($tmp,$path);
		echo '<META HTTP-EQUIV="Refresh" Content="0; URL=home.php">';

	}
	
}
?>