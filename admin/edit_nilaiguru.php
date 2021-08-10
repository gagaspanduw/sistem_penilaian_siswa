<?php
    include "include/koneksi.php";
 ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <?php 
        include "include/title.php";
        ?>

    <!-- Bootstrap Core CSS -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="assets/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

     <!-- DataTables CSS -->
    <link href="assets/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">
    
    <!-- DataTables Responsive CSS -->
    <link href="assets/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<?php 
    include "include/headerup.php"; 
    include "include/header.php";
    $param=$_GET['id_nilai'];

    $sql = "SELECT *, tbl_guru.nama as namaguru, tbl_nilai.keterangan as keterangannilai FROM tbl_nilai inner join tbl_guru on tbl_nilai.nip = tbl_guru.nip inner join tbl_pelajaran on tbl_nilai.id_pelajaran = tbl_pelajaran.id_pelajaran inner join tbl_kelas on tbl_nilai.id_kelas = tbl_kelas.id_kelas inner join tbl_siswa on tbl_nilai.nis = tbl_siswa.nis where id_nilai='$param'";
    $query = mysql_query($sql);
    $r = mysql_fetch_array($query);
?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Nilai</h1>
                    </div>

                    <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Input data nilai
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form method="post">
                    <table class="table table-bordered" border="8">                
                    <td>
                    <h4>Data Pelajaran</h4>
                    <div class="form-group">
                    <label class="control-label">Semester<span class="text-danger">*</span></label>
                    <select class="form-control" name="semester" required="" onchange="javascript:get(this)">
                        <option value="<?php echo $r['semester'];?>"><?php echo $r['semester'];?></option>
                        <option value="1">Ganjil</option>
                        <option value="2">Genap</option>
                    </select>
                    </div>
                    <div class="form-group">
                    <label class="control-label">Pelajaran<span class="text-danger">*</span></label>
                    <select class="form-control" name="pelajaran" required="" onchange="javascript:get(this)">
                            <option value ="<?php echo $r['id_pelajaran'];?>"><?php echo $r['nama_pelajaran'];?></option>
                            <?php $sql=mysql_query("SELECT * FROM tbl_pelajaran");
                            while ($data=mysql_fetch_array($sql))
                            {
                            ?>
                            <option value="<?php echo $data['id_pelajaran'];?> "> 
                            <?php echo $data['nama_pelajaran'] ; ?></option> 
                            <?php 
                            } 
                            ?> 
                    </select>
                    </div>
                    </td>
                    <td>
                    <h4>Data Siswa</h4>
                    <div class="form-group">
                    <label class="control-label">Kelas<span class="text-danger">*</span></label>
                    <select class="form-control" name="kelas" required="" onchange="javascript:get(this)">
                            <option value="<?php echo $r['id_kelas'];?>"><?php echo $r['kelas'];?> | <?php echo $r['nama_kelas'];?> | <?php echo $r['jurusan'];?> | <?php echo $r['tahun_ajaran'];?></option>
                            <?php $sql=mysql_query("SELECT * FROM tbl_kelas");
                            while ($data=mysql_fetch_array($sql))
                            {
                            ?>
                            <option value="<?php echo $data['id_kelas'];?> "> 
                            <?php echo $data['kelas'];?> | <?php echo $data['nama_kelas'];?> | <?php echo $data['jurusan'];?> | <?php echo $data['tahun_ajaran'];?></option> 
                            <?php 
                            } 
                            ?> 
                    </select>
                    </div>
                    <div class="form-group">
                    <label class="control-label">Nama Siswa<span class="text-danger">*</span></label>
                    <select class="form-control" name="nama_siswa" required="" onchange="javascript:get(this)">
                            <option value ="<?php echo $r['nis'];?>"><?php echo $r['nama'];?></option>
                            <?php $sql=mysql_query("SELECT * FROM tbl_siswa");
                            while ($data=mysql_fetch_array($sql))
                            {
                            ?>
                            <option value="<?php echo $data['nis'];?> "> 
                            <?php echo $data['nama'] ; ?></option> 
                            <?php 
                            } 
                            ?> 
                    </select>
                    </div>
                    </td>
                    <td>
                    <h4>Input Nilai</h4>
                    <div class="form-group">
                    <label class="control-label">Nilai UTS<span class="text-danger">*</span></label>
                    <input type="text" name="uts" class="form-control" value="<?php echo $r['nilai_uts'];?>">
                    </div>
                    <div class="form-group">
                    <label class="control-label">Nilai UAS<span class="text-danger">*</span></label>
                    <input type="text" name="uas" class="form-control" value="nilai_uas">
                    </div>
                    <div class="form-group">
                    <label class="control-label">Keterangan<span class="text-danger">*</span></label>
                    <input type="text" name="keterangan" class="form-control" value="<?php echo $r['keterangannilai'];?>">
                    </div>
                </td>
            </table>
                                        <button type="submit" name="submit" value="submit" class="btn btn-default">Submit</button>
                                        <button type="reset" class="btn btn-default">Reset</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<?php
if(isset($_POST['submit'])){
$semester  = $_POST['semester'];
$pelajaran = $_POST['pelajaran'];
$kelas = $_POST['kelas'];
$nama_siswa  = $_POST['nama_siswa'];
$uts = $_POST['uts'];
$uas  = $_POST['uas'];
$keterangan = $_POST['keterangan'];
$insert = mysql_query("UPDATE tbl_nilai SET semester='$semester', id_pelajaran='$pelajaran', id_kelas='$kelas', nip='$id_active', nis='$nama_siswa', nilai_uts='$uts', nilai_uas='$uas', keterangan='$keterangan' WHERE id_nilai='$param'");
if($insert){
{echo "<script>alert('Berhasil menyimpan data'); window.location='datanilai_guru.php'</script>";
  }
    }else{
{echo "<script>alert('Gagal menyimpan data'); window.location='datanilai_guru.php'</script>";
  }
}
}
?>                
        </div>
    </div>
</div>
</div>

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="assets/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="assets/dist/js/sb-admin-2.js"></script>

        <!-- DataTables JavaScript -->
    <script src="assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="assets/vendor/datatables-responsive/dataTables.responsive.js"></script>

        <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>

</html>
