<!DOCTYPE html>
<html>
	<head>
		<title>Jawaban UTS</title>
		<style>
			table, th, td {
				
				border: 1px solid black;
				width  : 300px;
				Margin-left: 800px;
				
			}
			h1{
				font-size: 20px;
				margin-left: 540px;
			}
			form{
				float: left;
				margin: 50px;
			}
			p{
				font-size: 40px;
				margin: 400px;
			}
		</style>
	</head>
	<body>
		<div id="form">
		<form method="get">
			Nama Wilayah :
			<select name="namaWilayah">
				<option>Nama Wilayah</option>
				<option value="DKI Jakarta">DKI Jakarta</option>
				<option value="Jawa Barat">Jawa Barat</option>
				<option value="Banten">Banten</option>
				<option value="Jawa Tengah">Jawa Tengah</option>
			</select><br>
		
			Jumlah Positif 		: <input type="text" name="jmlPositif"><br>
			Jumlah Dirawat 		: <input type="text" name="jmlDirawat"><br>
			Jumlah Sembuh 		: <input type="text" name="jmlSembuh"><br>
			Jumlah Meninggal 	: <input type="text" name="jmlMeninggal"><br>
			Nama Operator 		: <input type="text" name="nama"><br>
			NIM Mahasiswa 		: <input type="text" name="nim"><br>
			<input type="submit"></input>
	
		</form>
		</div><br><br>
		<center>
		<h1>Data Pemantauan COVID19 Wilayah <?php echo $_GET['namaWilayah']; ?> <br>
		<?php $dt = new DateTime('now', new DateTimezone('Asia/Jakarta')); ?>
		Per <?php echo $dt->format("d-F-y H:i:s"); ?> <br>
		<?php echo $_GET['nama']; ?> 
		<?php echo $_GET['nim']; ?>
		</h1>
		</center>
		<table>
			<tr>
				<th>Positif</th>
				<th>Dirawat</th>
				<th>Sembuh</th>
				<th>Meninggal</th>
			</tr>
			<tr>
				<th><?php echo $_GET['jmlPositif']; ?></th>
				<th><?php echo $_GET['jmlDirawat']; ?></th>
				<th><?php echo $_GET['jmlSembuh']; ?></th>
				<th><?php echo $_GET['jmlMeninggal']; ?></th>
			</tr>
		</table>
		<?php
			if(isset($_GET['nama']))
			{
				$namaWilayah=$_GET['namaWilayah'];

				$jmlPositif=$_GET['jmlPositif'];
				
				$jmlDirawat=$_GET['jmlDirawat'];
				
				$jmlSembuh=$_GET['jmlSembuh'];
				$jmlMeninggal=$_GET['jmlMeninggal'];
				$nama=$_GET['nama'];
				$nim=$_GET['nim'];
				$fp = fopen('data.txt', 'a');
				fwrite($fp, $namaWilayah."
");
				fwrite($fp, $jmlPositif."
");
				fwrite($fp, $jmlDirawat."
");
				fwrite($fp, $jmlSembuh."
");
				fwrite($fp, $jmlMeninggal."
");
				fwrite($fp, $nama."
");
				fwrite($fp, $nim."

");
				fclose($fp);
			}
		?>
	</body>

	<p>&copy; ilhamur rahman </p>
	
</html>