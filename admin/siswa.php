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
                            Input data siswa
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <form method="post">
                    <table class="table table-bordered" border="8">                
                    <td>
                    <div class="form-group">
                        <label class="control-label">NIS</label>
                        <input class="form-control" type="text" name="nis" />
                      </div>
                    <div class="form-group">
                        <label class="control-label">Nama</label>
                        <input class="form-control" type="text" name="nama" />
                      </div>
                    <div class="form-group">
                    <label for="jk" class="control-label">Jenis Kelamin<span class="text-danger">*</span></label>
                    <select class="form-control" name="jk" required="" onchange="javascript:get(this)">
                        <option value="">Option</option>
                        <option value="pria">Pria</option>
                        <option value="wanita">Wanita</option>
                    </select>
                    </div>
                    <div class="form-group">
                    <label for="agama" class="control-label">Agama<span class="text-danger">*</span></label>
                    <select class="form-control" name="agama" required="" onchange="javascript:get(this)">
                        <option value="">Option</option>
                        <option value="Islam">Islam</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Kristen">Kristen</option>
                    </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Tempat Lahir</label>
                        <input class="form-control" type="text" name="tempat_lhr" />
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <label class="control-label">Tanggal Lahir</label>
                        <input class="form-control" type="date" name="tgl_lhr" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Alamat</label>
                        <input class="form-control" type="text" name="alamat" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">No Telp</label>
                        <input class="form-control" type="text" name="no_tlp" />
                    </div>
                    <div class="form-group">
                    <label for="tahun_angkatan" class="control-label">Tahun Angkatan<span class="text-danger">*</span></label>
                    <select class="form-control" name="tahun_angkatan" required="" onchange="javascript:get(this)">
                        <option value="">Option</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                    </select>
                    </div>
                    <div class="form-group">
                    <label class="control-label">Status<span class="text-danger">*</span></label>
                    <select class="form-control" name="status" required="" onchange="javascript:get(this)">
                        <option value="">Option</option>
                        <option value="aktif">Aktif</option>
                        <option value="lulus">Lulus</option>
                        <option value="keluar">Keluar</option>
                    </select>
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
$nis  = $_POST['nis'];
$nama = $_POST['nama'];
$jk  = $_POST['jk'];
$agama = $_POST['agama'];
$tempat_lhr  = $_POST['tempat_lhr'];
$tgl_lhr = $_POST['tgl_lhr'];
$alamat  = $_POST['alamat'];
$no_tlp = $_POST['no_tlp'];
$tahun_angkatan  = $_POST['tahun_angkatan'];
$status = $_POST['status'];
$insert = mysql_query("INSERT INTO tbl_siswa VALUES('$nis', '$nama', '$jk', '$agama', '$tempat_lhr', '$tgl_lhr', '$alamat', '$no_tlp', '$tahun_angkatan', '$status')");
$insert1 = mysql_query("INSERT INTO tbl_user VALUES('$nis', '$nis', '$nis', '$nama', 'siswa')");
if($insert && $insert1){
{echo "<script>alert('Berhasil menyimpan data'); window.location='siswa.php'</script>";
  }
    }else{
{echo "<script>alert('Gagal menyimpan data'); window.location='siswa.php'</script>";
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
                                                <th>NIS</th>
                                                <th>Nama</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Agama</th>
                                                <th>Tempat Lahir</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Alamat</th>
                                                <th>No. Telp</th>
                                                <th>Tahun Angkatan</th>
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
                                            
                                            $res = $conn->query("SELECT * FROM tbl_siswa");
                                            while($row = $res->fetch_assoc()){
                                                echo '
                                                <tr>
                                                    <td>'.$row['nis'].'</td>
                                                    <td>'.$row['nama'].'</td>
                                                    <td>'.$row['jk'].'</td>
                                                    <td>'.$row['agama'].'</td>
                                                    <td>'.$row['tempat_lhr'].'</td>
                                                    <td>'.$row['tanggal_lhr'].'</td>
                                                    <td>'.$row['alamat'].'</td>
                                                    <td>'.$row['no_tlp'].'</td>
                                                    <td>'.$row['tahun_angkatan'].'</td>
                                                    <td>'.$row['status'].'</td>
                                                    <td align="center">
                                                    <a class="btn btn-primary btn-circle" href="edit_siswa.php?nis='.$row['nis'].'" onclick="return warn()" title="Edit"><i class="fa fa-edit "></i></a>
                                                    <a class="btn btn-danger btn-circle" href="delete_siswa.php?nis='.$row['nis'].'" onclick="return warn()" title="Hapus"><i class="fa fa-trash-o "></i></a></button>
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
