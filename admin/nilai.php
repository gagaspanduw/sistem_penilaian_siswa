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
                        <option value="">Option</option>
                        <option value="1">Ganjil</option>
                        <option value="2">Genap</option>
                    </select>
                    </div>
                    <div class="form-group">
                    <label class="control-label">Pelajaran<span class="text-danger">*</span></label>
                    <select class="form-control" name="pelajaran" required="" onchange="javascript:get(this)">
                            <option value ="">Select</option>
                            <?php $sql=mysql_query("SELECT * FROM tbl_pelajaran");
                            while ($data=mysql_fetch_array($sql))
                            {
                            ?>
                            <option value="<?php echo $data['id_pelajaran'];?>"> 
                            <?php echo $data['nama_pelajaran'] ; ?></option> 
                            <?php 
                            } 
                            ?> 
                    </select>
                    </div>
                    <div class="form-group">
                    <label class="control-label">Guru Pengajar<span class="text-danger">*</span></label>
                    <select class="form-control" name="guru" required="" onchange="javascript:get(this)">
                            <option value ="">Select</option>
                            <?php $sql=mysql_query("SELECT * FROM tbl_guru");
                            while ($data=mysql_fetch_array($sql))
                            {
                            ?>
                            <option value="<?php echo $data['nip'];?> "> 
                            <?php echo $data['nama'] ; ?></option> 
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
                            <option value ="">Select</option>
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
                            <option value ="">Select</option>
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
                    <input type="text" name="uts" class="form-control">
                    </div>
                    <div class="form-group">
                    <label class="control-label">Nilai UAS<span class="text-danger">*</span></label>
                    <input type="text" name="uas" class="form-control">
                    </div>
                    <div class="form-group">
                    <label class="control-label">Keterangan<span class="text-danger">*</span></label>
                    <input type="text" name="keterangan" class="form-control">
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
$guru  = $_POST['guru'];
$kelas = $_POST['kelas'];
$nama_siswa  = $_POST['nama_siswa'];
$uts = $_POST['uts'];
$uas  = $_POST['uas'];
$keterangan = $_POST['keterangan'];
$insert = mysql_query("INSERT INTO tbl_nilai VALUES('', '$semester', '$pelajaran', '$kelas', '$guru', '$nama_siswa', '$uts', '$uas', '$keterangan')");
if($insert){
{echo "<script>alert('Berhasil menyimpan data'); window.location='nilai.php'</script>";
  }
    }else{
{echo "<script>alert('Gagal menyimpan data'); window.location='nilai.php'</script>";
  }
}
}
?>                
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Semester</th>
                                                <th>Nama Pelajaran</th>
                                                <th>Kelas</th>
                                                <th>Guru</th>
                                                <th>Nama Siswa</th>
                                                <th>Nilai UTS</th>
                                                <th>Nilai UAS</th>
                                                <th>Keterangan</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $conn = new mysqli("localhost", "root", "", "fahri");
                                            if ($conn->connect_errno) {
                                                echo "Failed to connect to MySQL: " . $conn->connect_error;
                                            }
                                            
                                            $res = $conn->query("SELECT *, tbl_guru.nama as namaguru, tbl_siswa.nama as namasiswa, tbl_nilai.keterangan as keterangannilai FROM tbl_nilai inner join tbl_siswa on tbl_nilai.nis = tbl_siswa.nis inner join tbl_guru on tbl_nilai.nip = tbl_guru.nip inner join tbl_pelajaran on tbl_nilai.id_pelajaran = tbl_pelajaran.id_pelajaran inner join tbl_kelas on tbl_nilai.id_kelas = tbl_kelas.id_kelas");
                                            while($row = $res->fetch_assoc()){
                                                echo '
                                                <tr>
                                                    <td>'.$row['semester'].'</td>
                                                    <td>'.$row['nama_pelajaran'].'</td>
                                                    <td>'.$row['kelas'].'</td>
                                                    <td>'.$row['namaguru'].'</td>
                                                    <td>'.$row['namasiswa'].'</td>
                                                    <td>'.$row['nilai_uts'].'</td>
                                                    <td>'.$row['nilai_uas'].'</td>
                                                    <td>'.$row['keterangannilai'].'</td>
                                                    <td align="center">
                                                    <a class="btn btn-primary btn-circle" href="edit_nilai.php?id_nilai='.$row['id_nilai'].'" onclick="return warn()" title="Edit"><i class="fa fa-edit "></i></a>
                                                    <a class="btn btn-danger btn-circle" href="delete_nilai.php?id_nilai='.$row['id_nilai'].'" onclick="return warn()" title="Hapus"><i class="fa fa-trash-o "></i></a></button>
                                                    </td>
                                                </tr>
                                                ';
                                            }
                                            ?>
                                        </tbody>
                            </table>
                            <!-- /.col-lg-12 -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- /#page-wrapper -->
            </div>
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
