<?php
include "../koneksi.php";

   $row1 = $_GET['id_kelas'];
   $sql1 = "DELETE FROM tbl_kelas WHERE id_kelas='$row1'";
   $query1 = mysql_query($sql1);
   if($query1){
		echo "<script>alert('Data berhasil dihapus');document.location='kelas.php'</script>";
   } 
   else
   {
		echo "<script>alert('Data gagal dihapus');document.location='kelas.php'</script>";
   }
?>