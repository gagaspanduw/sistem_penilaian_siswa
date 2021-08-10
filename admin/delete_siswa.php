<?php
include "../koneksi.php";

   $row1 = $_GET['nis'];
   $sql1 = "DELETE FROM tbl_siswa WHERE nis='$row1'";
   $query1 = mysql_query($sql1);
   if($query1){
		echo "<script>alert('Data berhasil dihapus');document.location='siswa.php'</script>";
   } 
   else
   {
		echo "<script>alert('Data gagal dihapus');document.location='siswa.php'</script>";
   }
?>