<!DOCTYPE html>
<html>

<head>
	<title>Data Pemilu HKI</title>
</head>

<body>
	<style type="text/css">
		body {
			font-family: sans-serif;
		}

		p {
			color: green;
		}
	</style>
	<h2 style="text-align: center;">DATA PEMILU HUKUM KELUARGA ISLAM</h2>
	<h2 style="text-align: center;" >FAKULTAS SYARIAH</h2>
	<table border="1">
		<tr>
			<th>No</th>
			<th>nim</th>
			<th>nama</th>
			<th>mail</th>
			<th>status</th>
		</tr>
		<?php
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi, "SELECT * FROM `hki` WHERE `pilih` = '1' OR `pilih` = '2'");
		$data2 = mysqli_query($koneksi, "SELECT * FROM `hki` WHERE `pilih` = 'null'");
		while ($d = mysqli_fetch_array($data)) {
		?>
			<tr>
				<th><?php echo $no; ?></th>
				<th><?php echo $d['nim']; ?></th>
				<th><?php echo $d['nama']; ?></th>
				<th><?php echo $d['mail']; ?></th>
				<th><?php echo "Telah Memilih" ?></th>
			</tr>
		<?php
			$no++;
		}
		while ($d2 = mysqli_fetch_array($data2)) {
		?>
			<tr>
				<th><?php echo $no; ?></th>
				<th><?php echo $d2['nim']; ?></th>
				<th><?php echo $d2['nama']; ?></th>
				<th><?php echo $d2['mail']; ?></th>
				<th><?php echo "Belum Memilih" ?></th>
			</tr>
		<?php
			$no++;
		}
		?>
	</table>
</body>

</html>