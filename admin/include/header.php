<script language="JavaScript">
function logout() {  
return confirm("Apakah Yakin Anda Akan Keluar Sistem ?")  
}
</script>
<?php       
if (ISSET($_SESSION['username']))   {
  $user_active=$_SESSION['username'];

  }
  
if ($_SESSION['level'] == 'admin')
{
  echo "
            <div class='navbar-default sidebar' role='navigation'>
                <div class='sidebar-nav navbar-collapse'>
                    <ul class='nav' id='side-menu'>
                        <li>
                            <a href='home.php'><i class='fa fa-home fa-fw'></i>Home</a>
                        </li>
                        <li>
                            <a href='#'><i class='fa fa-bar-chart-o fa-fw'></i>Master<span class='fa arrow'></span></a>
                            <ul class='nav nav-second-level'>
                                <li>
                                    <a href='user.php'>User</a>
                                </li>
                                <li>
                                    <a href='siswa.php'>Siswa</a>
                                </li>
                                <li>
                                    <a href='guru.php'>Guru</a>
                                </li>
                                <li>
                                    <a href='kelas.php'>Kelas</a>
                                </li>
                                <li>
                                    <a href='pelajaran.php'>Pelajaran</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href='nilai.php'><i class='fa fa-table fa-fw'></i>Nilai</a>
                        </li>
                        <li>
                            <a href='laporan_nilai.php'><i class='fa fa-edit fa-fw'></i>Laporan</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
      ";
      }
 else if ($_SESSION['level'] == 'guru')
    {
        echo " 
            <div class='navbar-default sidebar' role='navigation'>
                <div class='sidebar-nav navbar-collapse'>
                    <ul class='nav' id='side-menu'>
                        <li>
                            <a href='home.php'><i class='fa fa-home fa-fw'></i>Home</a>
                        </li>
                        <li>
                            <a href='datanilai_guru.php'><i class='fa fa-book fa-fw'></i>Data Nilai</a>
                        </li>
                        <li>
                            <a href='inputnilai_guru.php'><i class='fa fa-edit fa-fw'></i>Input Nilai</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        ";
}
else
{
        echo " 
            <div class='navbar-default sidebar' role='navigation'>
                <div class='sidebar-nav navbar-collapse'>
                    <ul class='nav' id='side-menu'>
                        <li>
                            <a href='home.php'><i class='fa fa-home fa-fw'></i>Home</a>
                        </li>
                        <li>
                            <a href='laporan_nilai_detail_siswa.php'><i class='fa fa-book fa-fw'></i>Nilai</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        ";
}
?>
<!-- /navbar -->
