<?php
include "../koneksi.php";

   $row1 = $_GET['id_pelajaran'];
   $sql1 = "DELETE FROM tbl_pelajaran WHERE id_pelajaran='$row1'";
   $query1 = mysql_query($sql1);
   if($query1){
		echo "<script>alert('Data berhasil dihapus');document.location='pelajaran.php'</script>";
   } 
   else
   {
		echo "<script>alert('Data gagal dihapus');document.location='pelajaran.php'</script>";
   }
?>