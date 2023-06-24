<?php
    if (isset($_GET['idkriteria']) AND isset($_GET['kriteria'])) {
        $id = $_GET['idkriteria'];
        $krit = $_GET['kriteria'];

        // mengambil data id kriteria   
        $sql = "SELECT * FROM data_kriteria WHERE ID_Kriteria = '$id'";
        $kriteria = mysqli_query($koneksi_db, $sql);
        $data = mysqli_fetch_assoc($kriteria);

        $data_sub = "SELECT data_subkriteria.ID_Sub, data_kriteria.ID_Kriteria, data_kriteria.Nama_Kriteria, data_subkriteria.
        Nama_Subkriteria, data_subkriteria.Keterangan, data_subkriteria.Nilai FROM data_subkriteria INNER JOIN data_kriteria ON 
        data_subkriteria.ID_Kriteria = data_kriteria.ID_Kriteria WHERE Nama_Kriteria = '$krit'";
        $sub = mysqli_query($koneksi_db, $data_sub);

        if (isset($_POST['simpan'])) {
            $idKriteria = $data['ID_Kriteria'];
            $subkriteria = htmlspecialchars($_POST['sub_kriteria']);
            $keterangan = htmlspecialchars($_POST['ket']);
            $nilai = htmlspecialchars($_POST['nilai']);

            $sql = "INSERT INTO data_subkriteria VALUES ('', '$idKriteria', '$subkriteria', '$keterangan', '$nilai')";
            mysqli_query($koneksi_db, $sql);

            echo '<script>
                document.location.href = "index.php?page=tambah_subkriteria&idkriteria='. $_GET['idkriteria'] .
                '&kriteria='. $_GET['kriteria'] .'";
            </script>';
        }
    } else {
        // setting blank index
        $id = '';
        $krit = '';

        // fungsi delete
        if (isset($_GET['delete'])) {
            $namaSub = $_GET['delete'];
            $sqlDel = "DELETE FROM data_subkriteria WHERE Nama_Subkriteria = '$namaSub'";
            $query = mysqli_query($koneksi_db, $sqlDel);

            echo '<script>
                document.location.href = "index.php?page=sub_kriteria";
            </script>';

            // die();
        }
    }

?>

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tambah Sub Kriteria <?= $data['Nama_Kriteria']; ?></h1>

<!-- DataTales Example -->
<div class="card shadow mb-4 rounded-0">
    <div class="card-body">
        <form action="" method="post">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Sub Kriteria</label>
              <input type="text" class="form-control rounded-0" id="exampleFormControlInput1" name="sub_kriteria">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Keterangan</label>
              <input type="text" class="form-control rounded-0" id="exampleFormControlInput1" name="ket">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Nilai</label>
              <input type="text" class="form-control rounded-0" id="exampleFormControlInput1" name="nilai">
            </div>
            <button type="submit" class="btn btn-success btn-square rounded-0" name="simpan">
                Simpan
            </button>
        </form>
    </div>
</div>
<div class="card shadow rounded-0">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kriteria</th>
                        <th>Sub Kriteria</th>
                        <th>Keterangan</th>
                        <th>Nilai</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  
                        $no = 0;
                        while ($subkrit = mysqli_fetch_assoc($sub)) :
                        $no++;
                    ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $subkrit['Nama_Kriteria']; ?></td>
                        <td><?= $subkrit['Nama_Subkriteria']; ?></td>
                        <td><?= $subkrit['Keterangan']; ?></td>
                        <td><?= $subkrit['Nilai']; ?></td>
                        <td class="text-center">
                            <a href="index.php?page=edit_subkriteria&edit=<?= $subkrit['ID_Sub']; ?>" class="btn btn-warning btn-square rounded-0">
                              <i class="fas fa-edit"></i>
                          </a>
                          <a href="index.php?page=tambah_subkriteria&delete=<?= $subkrit['Nama_Subkriteria']; ?>" class="btn btn-danger btn-square rounded-0">
                              <i class="fas fa-trash"></i>
                          </a>
                        </td>
                    </tr>
                    <?php  
                        endwhile;
                    ?>
                </tbody>
            </table>
        </div>
        <a href="index.php?page=sub_kriteria" class="btn btn-success btn-square rounded-0">
            Kembali
        </a>
    </div>    
</div>