<?php  
    if (@$_GET['page'] == 'dashboard') {
        $activ1 = 'active';
        $activ2 = '';
        $activ3 = '';
        $activ4 = '';
        $activ5 = '';
        $activ6 = '';
        $activ7 = '';
        $activ8 = '';
    } else if (@$_GET['page'] == 'data_siswa') {
        $activ1 = '';
        $activ2 = 'active';
        $activ3 = '';
        $activ4 = '';
        $activ5 = '';
        $activ6 = '';
        $activ7 = '';
        $activ8 = '';
    } else if (@$_GET['page'] == 'data_kriteria') {
        $activ1 = '';
        $activ2 = '';
        $activ3 = 'active';
        $activ4 = '';
        $activ5 = '';
        $activ6 = '';
        $activ7 = '';
        $activ8 = ''; 
    } else if (@$_GET['page'] == 'data_penilaian') {
        $activ1 = '';
        $activ2 = '';
        $activ3 = '';
        $activ4 = 'active';
        $activ5 = '';
        $activ6 = '';
        $activ7 = '';
        $activ8 = '';
    } else if (@$_GET['page'] == 'proses_perhitungan') {
        $activ1 = '';
        $activ2 = '';
        $activ3 = '';
        $activ4 = '';
        $activ5 = 'active';
        $activ6 = '';
        $activ7 = '';
        $activ8 = '';
    } else if (@$_GET['page'] == 'hasil_perhitungan') {
        $activ1 = '';
        $activ2 = '';
        $activ3 = '';
        $activ4 = '';
        $activ5 = '';
        $activ6 = 'active';
        $activ7 = '';
        $activ8 = '';
    } else if (@$_GET['page'] == 'laporan') {
        $activ1 = '';
        $activ2 = '';
        $activ3 = '';
        $activ4 = '';
        $activ5 = '';
        $activ6 = '';
        $activ7 = 'active';
        $activ8 = '';
    } else if (@$_GET['page'] == 'informasi') {
        $activ1 = '';
        $activ2 = '';
        $activ3 = '';
        $activ4 = '';
        $activ5 = '';
        $activ6 = '';
        $activ7 = '';
        $activ8 = 'active';
    } else {
        $activ1 = '';
        $activ2 = '';
        $activ3 = '';
        $activ4 = '';
        $activ5 = '';
        $activ6 = '';
        $activ7 = '';
        $activ8 = '';
    }
?>

<!-- Nav Item - Dashboard -->
<li class="nav-item <?= $activ1 ?>">
    <a class="nav-link" href="index.php?page=dashboard">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Beranda</span></a>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item <?= $activ2 ?>">
    <a class="nav-link collapsed" href="index.php?page=data_siswa"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-tasks"></i>
        <span>Data Siswa</span>
    </a>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item <?= $activ3 ?>">
    <a class="nav-link collapsed" href="index.php?page=data_kriteria"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-tasks"></i>
        <span>Data Kriteria</span>
    </a>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item <?= $activ4 ?>">
    <a class="nav-link collapsed" href="index.php?page=data_penilaian"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-tasks"></i>
        <span>Data Nilai Siswa</span>
    </a>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item <?= $activ5 ?>">
    <a class="nav-link collapsed" href="index.php?page=proses_perhitungan"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-calculator"></i>
        <span>Proses Perhitungan</span>
    </a>
</li>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item <?= $activ6 ?>">
    <a class="nav-link collapsed" href="index.php?page=hasil_perhitungan"
        aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-table"></i>
        <span>Hasil Perhitungan</span>
    </a>
</li>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item <?= $activ7 ?>">
    <a class="nav-link collapsed" href="?page=laporan" data-toggle="collapse" data-target="#collapsePageslaporan"
        aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-print"></i>
        <span>Laporan</span>
    </a>
    <div id="collapsePageslaporan" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded-0">
            <h6 class="collapse-header">Cetak Laporan</h6>
            <a class="collapse-item" href="index.php?page=laporan_normalisasi">Cetak Normalisasi</a>
            <a class="collapse-item" href="index.php?page=laporan_perankingan">Cetak Perankingan</a>
        </div>
    </div>
</li>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item <?= $activ8 ?>">
    <a class="nav-link collapsed" href="?page=informasi" data-toggle="collapse" data-target="#collapsePages4"
        aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-info"></i>
        <span>Informasi Lain</span>
    </a>
    <div id="collapsePages4" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded-0">
            <h6 class="collapse-header">Informasi</h6>
            <a class="collapse-item" href="index.php?page=tentang">Tentang SPK</a>
            <a class="collapse-item" href="index.php?page=penggunaan">Cara Penggunaan</a>
        </div>
    </div>
</li>