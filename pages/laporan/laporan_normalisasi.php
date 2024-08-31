<?php  
  $normali = mysqli_query($koneksi_db, "SELECT Nama_Kriteria FROM data_kriteria");
  $siswa = mysqli_query($koneksi_db, "SELECT ID_Alter, Nama_Siswa FROM data_alternatif");

  $dataNorm = "SELECT * FROM hasil_normalisasi";
  $retNorm = mysqli_query($koneksi_db, $dataNorm);
  $jumlahNorm = mysqli_num_rows($retNorm);
?>

<?php  
  if ($jumlahNorm == 0) {
?>
  <!-- Page Heading -->
  <div class="mb-4">
    <h5 class="mb-3 text-gray-800 my-sm-auto">Hasil normalisasi belum tersedia..</h5>
  </div>
<?php  
  } else {
?>
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h5 class="mb-3 text-gray-800 my-sm-auto">Cetak Hasil Normalisasi</h5>
    <a href="assets/report/report_normalisasi.php" class="d-inline-block btn btn-sm btn-custom rounded-0" target="_blank">
    	<i class="fas fa-file-pdf fa-sm mr-2"></i>Cetak Hasil PDF
  	</a>
  </div>

  <!-- DataTales Example -->
  <div class="card mb-4 rounded-0">
  	<div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" width="100%" cellspacing="0">
          <thead>
            <tr>
            	<th class="text-nowrap">No</th>
              <th class="text-nowrap">Nama Siswa</th>
              <?php  
                  $no = 0;
                  while ($krit = mysqli_fetch_assoc($normali)) :
                  $no++;
              ?>
                  <th class="text-nowrap"><?= 'C'. $kode = str_pad($no, 2, '0', STR_PAD_LEFT); ?></th>
              <?php endwhile; ?>
            </tr>
          </thead>
          <tbody>
            <?php 
            		$no = 0;
                while ($sis = mysqli_fetch_assoc($siswa)) :
                $no++;
            ?>
              <tr>
              	<td class="text-nowrap"><?= $no; ?></td>
                <td class="text-nowrap text-uppercase"><?= $sis['Nama_Siswa']; ?></td>
                <?php  
                  $hasil = mysqli_query($koneksi_db, "SELECT Hasil_Norm FROM hasil_normalisasi 
                  WHERE ID_Alter = '$sis[ID_Alter]'");

                  while ($nilai = mysqli_fetch_assoc($hasil)) :
                ?>
                  <td class="text-nowrap"><?= round($nilai['Hasil_Norm'], 3); ?></td>
                <?php endwhile; ?>
              </tr>
            <?php endwhile; ?>
          </tbody>
        </table>
      </div>
  	</div>
  </div>
<?php 
  }
?>