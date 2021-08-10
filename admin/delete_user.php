<?php
include "../koneksi.php";

   $row1 = $_GET['id_user'];
   $sql1 = "DELETE FROM tbl_user WHERE id_user='$row1'";
   $query1 = mysql_query($sql1);
   if($query1){
		echo "<script>alert('Data berhasil dihapus');document.location='user.php'</script>";
   } 
   else
   {
		echo "<script>alert('Data gagal dihapus');document.location='user.php'</script>";
   }
?>