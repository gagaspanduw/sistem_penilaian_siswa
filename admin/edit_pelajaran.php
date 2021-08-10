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
    $param = $_GET['id_pelajaran'];
    $sql = "SELECT * FROM tbl_pelajaran where id_pelajaran=$param";
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
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit data pelajaran
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <form method="post">
                    <div class="form-group">
                        <label class="control-label">Nama Pelajaran</label>
                        <input class="form-control" type="text" name="nama_pelajaran" value="<?php echo $r['nama_pelajaran']; ?>" />
                      </div>
                    <div class="form-group">
                    <label class="control-label">Keterangan<span class="text-danger">*</span></label>
                    <select class="form-control" name="keterangan" required="" onchange="javascript:get(this)">
                        <option value="<?php echo $r['keterangan']; ?>"><?php echo $r['keterangan']; ?></option>
                        <option value="Wajib">Wajib</option>
                        <option value="Tambahan">Tambahan</option>
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
$nama_pelajaran = $_POST['nama_pelajaran'];
$keterangan  = $_POST['keterangan'];
$insert = mysql_query("UPDATE tbl_pelajaran SET nama_pelajaran='$nama_pelajaran', keterangan='$keterangan' where id_pelajaran='$param'");
if($insert){
{echo "<script>alert('Berhasil menyimpan data'); window.location='pelajaran.php'</script>";
  }
    }else{
{echo "<script>alert('Gagal menyimpan data'); window.location='pelajaran.php'</script>";
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
