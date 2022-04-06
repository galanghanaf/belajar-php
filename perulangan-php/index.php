<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta name="description" content="kelompok 3" />
	<meta name="keywords" content="kelompok 3" />
	<meta name="author" content="kelompok 3" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="./main.css"/>
	<title>Kelompok 3</title>
</head>
<body>
	<header>
		<div class="banner">
		</div>
	</header>
	<main>
		<div class="content">
			<center>
				<h1>Studi Kasus</h1>
				<h2>Diketahui Mahasiswa Yang Akan Mengikuti Ulangan Pada Pukul 08.00 - 10.00 WIB</h2>
				</br>
				<table border="1">
					<tr>
						<td>NPM</td>
						<td>Nama</td>
						<td>Alamat</td>
					</tr>
					<?php
					include "./koneksi.php";
					$query = mysqli_query($conn, 'SELECT * FROM anggota_kelompok3');

					$result = array();
					while ($data = mysqli_fetch_array($query)) {
						$result[] = $data; //result dijadikan array 
					}
					//selanjutnya result array di foreach
					foreach ($result as $loopdata) {
					?>
						<tr>
							<td><?php echo "0" . $loopdata['npm'] ?></td>
							<td><?php echo $loopdata['nama'] ?></td>
							<td><?php echo $loopdata['domisili'] ?></td>
						</tr>
					<?php } ?>

				</table>
				<p>Berikut ini mahasiswa yang mendapatkan Soal A</p>
				<table border="1">
					<tr>
						<td align="center" colspan="7">Soal A</td>
					</tr>
					<tr>
						<td>NPM</td>
						<td>Nama</td>
						<td>Alamat</td>
					</tr>
					<?php foreach ($result as $loopdata) {
						if ($loopdata['npm'] % 2 != 0) { ?>
							<tr>
								<td><?php echo "0" . $loopdata['npm'] ?></td>
								<td><?php echo $loopdata['nama'] ?></td>
								<td><?php echo $loopdata['domisili'] ?></td>
							</tr>
					<?php }
					}; ?>
				</table>

				</table>
				<p>Berikut ini mahasiswa yang mendapatkan Soal B</p>
				<table border="1">
					<tr>
						<td align="center" colspan="7">Soal B</td>
					</tr>
					<tr>
						<td>NPM</td>
						<td>Nama</td>
						<td>Alamat</td>
					</tr>
					<?php foreach ($result as $loopdata) {
						if ($loopdata['npm'] % 2 == 0) { ?>
							<tr>
								<td><?php echo "0" . $loopdata['npm'] ?></td>
								<td><?php echo $loopdata['nama'] ?></td>
								<td><?php echo $loopdata['domisili'] ?></td>
							</tr>
					<?php }
					}; ?>
				</table>
			</center>
	</main>
</body>
</html>