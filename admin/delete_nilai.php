<?php
include "../koneksi.php";

   $row1 = $_GET['id_nilai'];
   $sql1 = "DELETE FROM tbl_nilai WHERE id_nilai='$row1'";
   $query1 = mysql_query($sql1);
   if($query1){
		echo "<script>alert('Data berhasil dihapus');document.location='nilai.php'</script>";
   } 
   else
   {
		echo "<script>alert('Data gagal dihapus');document.location='nilai.php'</script>";
   }
?>