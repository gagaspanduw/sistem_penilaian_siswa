<?php
include "../koneksi.php";

   $row1 = $_GET['id_detail_kelas'];
   $sql1 = "DELETE FROM tbl_detail_kelas WHERE id_detail_kelas='$row1'";
   $query1 = mysql_query($sql1);
   if($query1){
		echo "<script>alert('Data berhasil dihapus');document.location='detail_kelas.php'</script>";
   } 
   else
   {
		echo "<script>alert('Data gagal dihapus');document.location='detail_kelas.php'</script>";
   }
?>