<?php  
	require '../../config/connect_db.php';

	require_once __DIR__ . '../../../vendor/autoload.php';

	// format tgl indonesia
	setlocale(LC_ALL, 'id-ID', 'id_ID');
	$tgl1 = strftime("%A, %d %B %Y | %T");
	$tgl2 = strftime("%d %B %Y");

	$pref = mysqli_query($koneksi_db, "SELECT hasil_preferensi.ID_Pref, hasil_preferensi.ID_Alter, data_alternatif.Nama_Siswa, data_alternatif.Kelas, hasil_preferensi.hasil_pref FROM hasil_preferensi INNER JOIN 
	data_alternatif ON hasil_preferensi.ID_Alter = data_alternatif.ID_Alter ORDER BY hasil_pref DESC");

	$mpdf = new \Mpdf\Mpdf();
	$mpdf->debug = false;

	$header = '<div class="head" style="border-bottom: 5px double black; font-family: sans-serif;">	
							<img src="../img/logo_birayang.png" alt="" width="100" height="100" style="float: left; margin-right: 15px;">
							<h3 style="float: right; padding-top: 15px;">Laporan Hasil Normalisasi<br>SPK Penerima Beasiswa Tahfidz<br>
							SD Negeri 1 Birayang</h3>
						</div>'; 

	$subhead = '<div style="font-family: sans-serif;">
								<p style="font-weight: bold;">Hasil Perankingan</p>
								<p style="font-size: 12px;">'. $tgl1 .'</p>
							</div>';

	$tabel = '<table border="1" width="100%" cellspacing="0" cellpadding="5" style="font-size: 12px; font-family: sans-serif;">
	            <thead>
	                <tr>
	                		<th>No</th>
	                    <th>Nama Siswa</th>
	                    <th>Kelas</th>
	                    <th>Nilai Akhir (Pref)</th>
	                    <th>Peringkat</th>
	                </tr>
	            </thead>
	            <tbody>';
            			$no = 0;  
            			while ($res = mysqli_fetch_assoc($pref)) :
            			$no++;	
         	$tabel .= '<tr>
         							<td>'. $no .'</td>
                      <td>'. $res['Nama_Siswa'] .'</td>
                      <td>'. $res['Kelas'] .'</td>
                      <td>'. round($res['hasil_pref'], 3) .'</td>
                      <td>'. $no .'</td>  
	                  </tr>';
            			endwhile;
	$tabel .= '</tbody>
	      </table>';

  $date = '<div style="text-align: right; margin-top:50px; font-family: sans-serif;">
					 	<p>Kab. Hulu Sungai Tengah, '. $tgl2 .'</p>
					 	<p style="margin-right: 60px;">Admin</p>
					 	<br><br>
					 	<p style="margin-right: 12px;">..................................</p>
					</div>';

	$mpdf->SetTitle('Laporan Perankingan');								
	$mpdf->WriteHTML($header);
	$mpdf->WriteHTML($subhead);
	$mpdf->WriteHTML($tabel);
	$mpdf->WriteHTML($date);
	$mpdf->SetFooter('SPK Penerima Beasiswa Tahfidz|{PAGENO}|Hasil Perankingan');
	$mpdf->Output('Laporan Perankingan.pdf', \Mpdf\Output\Destination::INLINE);

?>