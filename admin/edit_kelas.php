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
    $param = $_GET['id_kelas'];
    $sql = "SELECT * FROM tbl_kelas inner join tbl_guru on tbl_kelas.nip = tbl_guru.nip where id_kelas='$param'";
    $query = mysql_query($sql);
    $r = mysql_fetch_array($query);
?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Master</h1>
                    </div>

                    <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Input data kelas
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <form method="post">
                    <div class="form-group">
                    <label class="control-label">Kelas<span class="text-danger">*</span></label>
                    <select class="form-control" name="kelas" required="" onchange="javascript:get(this)">
                        <option value="<?php echo $r['kelas']; ?>"><?php echo $r['kelas']; ?></option>
                        <option value="X">X</option>
                        <option value="XI">XI</option>
                        <option value="XII">XII</option>
                    </select>
                    </div>
                    <div class="form-group">
                    <label class="control-label">Nama Kelas<span class="text-danger">*</span></label>
                    <select class="form-control" name="namakelas" required="" onchange="javascript:get(this)">
                        <option value="<?php echo $r['nama_kelas']; ?>"><?php echo $r['nama_kelas']; ?></option>
                        <option value="Kelas A">Kelas A</option>
                        <option value="Kelas B">Kelas B</option>
                        <option value="Kelas C">Kelas C</option>
                    </select>
                    </div>
                    <div class="form-group">
                    <label class="control-label">Walikelas<span class="text-danger">*</span></label>
                    <select class="form-control" name="nip" required="" onchange="javascript:get(this)">
                            <option value ="<?php echo $r['nip']; ?>"><?php echo $r['nama']; ?></option>
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
                    <div class="form-group">
                    <label class="control-label">Tahun Ajaran<span class="text-danger">*</span></label>
                    <select class="form-control" name="tahun_ajaran" required="" onchange="javascript:get(this)">
                        <option value="<?php echo $r['tahun_ajaran']; ?>"><?php echo $r['tahun_ajaran']; ?></option>
                        <option value="2015/2016">2015/2016</option>
                        <option value="2016/2017">2016/2017</option>
                        <option value="2017/2018">2017/2018</option>
                        <option value="2018/2019">2018/2019</option>
                    </select>
                    </div>
                    <div class="form-group">
                    <label class="control-label">Jurusan<span class="text-danger">*</span></label>
                    <select class="form-control" name="jurusan" required="" onchange="javascript:get(this)">
                        <option value="<?php echo $r['jurusan']; ?>"><?php echo $r['jurusan']; ?></option>
                        <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
                        <option value="Akuntansi">Akuntansi</option>
                        <option value="Administrasi Perkantoran">Administrasi Perkantoran</option>
                    </select>
                    </div>




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
$kelas = $_POST['kelas'];
$namakelas = $_POST['namakelas'];
$nip  = $_POST['nip'];
$tahun_ajaran  = $_POST['tahun_ajaran'];
$jurusan = $_POST['jurusan'];
$insert = mysql_query("UPDATE tbl_kelas SET kelas='$kelas', nama_kelas='$namakelas', nip='$nip', tahun_ajaran='$tahun_ajaran', jurusan='$jurusan' where id_kelas='$param'");
if($insert){
{echo "<script>alert('Berhasil menyimpan data'); window.location='kelas.php'</script>";
  }
    }else{
{echo "<script>alert('Gagal menyimpan data'); window.location='kelas.php'</script>";
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
