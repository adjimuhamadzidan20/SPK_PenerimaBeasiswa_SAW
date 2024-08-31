<?php
    // nama kriteria
    $namaKriteria = "SELECT Nama_Kriteria FROM data_kriteria";
    $rendKriteria = mysqli_query($koneksi_db, $namaKriteria);

    // menangkap data alternatif sesuai nama siswa
    $idAlt = $_GET['penilaian'];
    $namaSiswa = "SELECT * FROM data_alternatif WHERE ID_Alter = '$idAlt'";
    $rendSiswa = mysqli_query($koneksi_db, $namaSiswa);
    $res = mysqli_fetch_assoc($rendSiswa);

    // jumlah data kriteria  
    $cekJuml = "SELECT COUNT(ID_Kriteria) FROM data_kriteria";
    $total = mysqli_query($koneksi_db, $cekJuml);
    $tes = mysqli_fetch_row($total);
    $jumlah = $tes[0];
?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-1">
  <h1 class="h3 text-gray-800">Nama Siswa : <?= $res['Nama_Siswa']; ?></h1>
</div>

<!-- DataTales Example -->
<div class="card mb-4 rounded-0">
    <div class="card-header bg-white py-3 d-flex">
        <h6 class="m-0 text-gray-800">Tambah Penilaian</h6>
    </div>
    <div class="card-body">
        <form action="pages/data_penilaian/proses_tambah_penilaian.php?id=<?= $_GET['penilaian']; ?>" method="post">
            <?php
                $i = 1;
                while ($i <= $jumlah) :   
            ?>
                <?php 
                    $no = 0;
                    while ($krit = mysqli_fetch_assoc($rendKriteria)) :
                    $no++; 
                ?>
                    <div class="mb-4">
                      <label for="exampleFormControlInput1" class="form-label">
                      (<?= 'C'. $kode = str_pad($no, 2, '0', STR_PAD_LEFT); ?>) <?= $krit['Nama_Kriteria']; ?></label>
                      <input type="text" class="form-control rounded-0" id="exampleFormControlInput1" name="nilai[]" 
                      placeholder="Masukkan Nilai" required>
                    </div>
                <?php endwhile; ?>
            <?php 
                $i++;
                endwhile; 
            ?>
            <a href="index.php?page=data_penilaian" class="btn btn-secondary btn-square rounded-0">
                <i class="fas fa-chevron-left fa-sm"></i> Kembali
            </a>
            <button type="submit" class="btn btn-custom btn-square rounded-0">
                <i class="fas fa-save fa-sm"></i> Simpan
            </button>
        </form>
    </div>
</div>