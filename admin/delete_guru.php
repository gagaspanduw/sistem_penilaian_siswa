<?php
include "../koneksi.php";

   $row1 = $_GET['nip'];
   $sql1 = "DELETE FROM tbl_guru WHERE nip='$row1'";
   $query1 = mysql_query($sql1);
   if($query1){
		echo "<script>alert('Data berhasil dihapus');document.location='guru.php'</script>";
   } 
   else
   {
		echo "<script>alert('Data gagal dihapus');document.location='nip.php'</script>";
   }
?>