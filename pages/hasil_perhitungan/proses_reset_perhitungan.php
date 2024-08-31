<?php
	session_start();
	require '../../config/connect_db.php';

	// proses reset hasil
	$jmlNorm = mysqli_query($koneksi_db, "SELECT * FROM hasil_normalisasi");
	$jmlPref = mysqli_query($koneksi_db, "SELECT * FROM hasil_preferensi");
	$row1 = mysqli_num_rows($jmlNorm);
	$row2 = mysqli_num_rows($jmlPref);

	$tabNorm = mysqli_query($koneksi_db, "TRUNCATE TABLE hasil_normalisasi");
	$tabPref = mysqli_query($koneksi_db, "TRUNCATE TABLE hasil_preferensi");

	$_SESSION['pesan'] = 'Hasil perhitungan berhasil terhapus!';
	$_SESSION['status'] = 'success';
	header('Location: ../../index.php?page=hasil_perhitungan');
	exit;

?>