<?php  
    $queryKrit = mysqli_query($koneksi_db, "SELECT COUNT(Nama_Kriteria) FROM data_kriteria");
    $queryAlt= mysqli_query($koneksi_db, "SELECT COUNT(Nama_Siswa) FROM data_alternatif");

    $resKrit = mysqli_fetch_row($queryKrit);
    $resAlt = mysqli_fetch_row($queryAlt);
?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-3">
    <h1 class="h4 mb-0 text-gray-800 text-uppercase">SPK Penerima Beasiswa Tahfidz SD Negeri 1 Birayang</h1>
</div>

<!-- Content Row -->
<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl col-md-12 col-lg-6 mb-4">
        <div class="card border-left-info h-100 py-2 rounded-0">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                            Data Kriteria</div>
                        <div class="text-md mb-0 text-gray-800">Total <?= $resKrit[0]; ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-folder fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl col-md-12 col-lg-6 mb-4">
        <div class="card border-left-info h-100 py-2 rounded-0">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                            Data Siswa</div>
                        <div class="text-md mb-0 text-gray-800">Total <?= $resAlt[0]; ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-folder fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>