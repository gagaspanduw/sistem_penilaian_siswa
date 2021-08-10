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
                        <h1 class="page-header">Master</h1>
                    </div>

                    <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Input data guru
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <form method="post">
                    <div class="form-group">
                        <label class="control-label">NIP</label>
                        <input class="form-control" type="text" name="nip"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Nama</label>
                        <input class="form-control" type="text" name="nama" />
                    </div>
                    <div class="form-group">
                    <label class="control-label">Jenis Kelamin<span class="text-danger">*</span></label>
                    <select class="form-control" name="jk" required="" onchange="javascript:get(this)">
                        <option value="">Option</option>
                        <option value="pria">Pria</option>
                        <option value="wanita">Wanita</option>
                    </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Alamat</label>
                        <input class="form-control" type="text" name="alamat" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">No. Telp</label>
                        <input class="form-control" type="text" name="no_tlp" />
                    </div>
                    <div class="form-group">
                    <label class="control-label">Status<span class="text-danger">*</span></label>
                    <select class="form-control" name="status" required="" onchange="javascript:get(this)">
                        <option value="">Option</option>
                        <option value="aktif">Aktif</option>
                        <option value="tidak">Tidak aktif</option>
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
$nip  = $_POST['nip'];
$nama = $_POST['nama'];
$jk  = $_POST['jk'];
$alamat  = $_POST['alamat'];
$no_tlp = $_POST['no_tlp'];
$status  = $_POST['status'];
$insert = mysql_query("INSERT INTO tbl_guru VALUES('$nip', '$nama', '$jk', '$alamat', '$no_tlp', '$status')");
$insert1 = mysql_query("INSERT INTO tbl_user VALUES('$nip', '$nip', '$nip', '$nama', 'guru')");
if($insert && $insert1){
{echo "<script>alert('Berhasil menyimpan data'); window.location='guru.php'</script>";
  }
    }else{
{echo "<script>alert('Gagal menyimpan data'); window.location='guru.php'</script>";
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
                                                <th>NIP</th>
                                                <th>Nama</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Alamat</th>
                                                <th>No. Telp</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $conn = new mysqli("localhost", "root", "", "fahri");
                                            if ($conn->connect_errno) {
                                                echo "Failed to connect to MySQL: " . $conn->connect_error;
                                            }
                                            
                                            $res = $conn->query("SELECT * FROM tbl_guru");
                                            while($row = $res->fetch_assoc()){
                                                echo '
                                                <tr>
                                                    <td>'.$row['nip'].'</td>
                                                    <td>'.$row['nama'].'</td>
                                                    <td>'.$row['jk'].'</td>
                                                    <td>'.$row['alamat'].'</td>
                                                    <td>'.$row['no_tlp'].'</td>
                                                    <td>'.$row['status'].'</td>
                                                    <td align="center">
                                                    <a class="btn btn-primary btn-circle" href="edit_guru.php?nip='.$row['nip'].'" onclick="return warn()" title="Edit"><i class="fa fa-edit "></i></a>
                                                    <a class="btn btn-danger btn-circle" href="delete_guru.php?nip='.$row['nip'].'" onclick="return warn()" title="Hapus"><i class="fa fa-trash-o "></i></a></button>
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
    <?php include "include/footer.php"; ?>
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
