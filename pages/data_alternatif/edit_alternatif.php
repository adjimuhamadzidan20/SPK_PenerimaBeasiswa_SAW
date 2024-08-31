<?php
    // menangkap data alternatif
    $idAlt = $_GET['edit'];
    $sqlSis = "SELECT * FROM data_alternatif WHERE ID_Alter = '$idAlt'";
    $querySis = mysqli_query($koneksi_db, $sqlSis);
    $data = mysqli_fetch_assoc($querySis);
?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-1">
  <h1 class="h3 text-gray-800">Edit Data Siswa</h1>
</div>

<!-- DataTales Example -->
<div class="card mb-4 rounded-0">
    <div class="card-header bg-white py-3 d-flex">
        <h6 class="m-0 text-gray-800">Edit Data Siswa</h6>
    </div>
    <div class="card-body">
        <form action="pages/data_alternatif/proses_edit_alternatif.php?id=<?= $_GET['edit']; ?>" method="post">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Siswa</label>
                <input type="text" class="form-control rounded-0" id="exampleFormControlInput1" name="nama_siswa" 
                value="<?= $data['Nama_Siswa']; ?>" required>
            </div>
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin</label>
                <select class="form-control rounded-0" aria-label="Default select example" name="jenis_kelamin" required>
                    <option selected value="<?= $data['Jenis_Kelamin']; ?>" class="bg-secondary text-white">
                    <?= $data['Jenis_Kelamin']; ?></option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="exampleFormControlInput1" class="form-label">Kelas</label>
                <select class="form-control rounded-0" aria-label="Default select example" name="kelas" required>
                    <option selected value="<?= $data['Kelas']; ?>" class="bg-secondary text-white"><?= $data['Kelas']; ?></option>
                    <?php  
                        for ($i = 1; $i <= 6; $i++) :
                    ?>
                        <option value="Kelas <?= $i ?>">Kelas <?= $i ?></option>
                    <?php  
                        endfor;
                    ?>
                </select>
            </div>
            <div class="mb-4">
                <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                <input type="text" class="form-control rounded-0" id="exampleFormControlInput1" name="alamat" 
                value="<?= $data['Alamat']; ?>" required>
            </div>
            <a href="index.php?page=data_siswa" class="btn btn-secondary btn-square rounded-0">
                <i class="fas fa-chevron-left fa-sm"></i> Kembali
            </a>
            <button type="submit" class="btn btn-custom btn-square rounded-0">
                <i class="fas fa-edit fa-sm"></i> Edit
            </button>
        </form>
    </div>
</div>