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
                        <h1 class="page-header">Home</h1>
                    </div>

                    <?php 
                    $sql="SELECT * FROM tbl_guru order by nip desc";
                    $query=mysql_query($sql);
                    $row=mysql_num_rows($query);

                    $sql1="SELECT * FROM tbl_siswa order by nis desc";
                    $query1=mysql_query($sql1);
                    $row1=mysql_num_rows($query1);

                    $sql2="SELECT * FROM tbl_pelajaran order by id_pelajaran desc";
                    $query2=mysql_query($sql2);
                    $row2=mysql_num_rows($query2);

                    $sql3="SELECT * FROM tbl_kelas order by id_kelas desc";
                    $query3=mysql_query($sql3);
                    $row3=mysql_num_rows($query3);
                     ?>
                    <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo "$row"; ?></div>
                                    <div>Guru</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo "$row1"; ?></div>
                                    <div>Siswa</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-book fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo "$row2"; ?></div>
                                    <div>Pelajaran</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-support fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo "$row3"; ?></div>
                                    <div>Kelas</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<br>
<br>
<br>
<br>
<br>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Siswa Baru
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover">
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
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $conn = new mysqli("localhost", "root", "", "fahri");
                                            if ($conn->connect_errno) {
                                                echo "Failed to connect to MySQL: " . $conn->connect_error;
                                            }
                                            
                                            $res = $conn->query("SELECT * FROM tbl_siswa order by nis desc limit 2");
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
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

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
