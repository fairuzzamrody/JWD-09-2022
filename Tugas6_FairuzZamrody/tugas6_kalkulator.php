<!DOCTYPE html>
<html>
<head>
	<title>Tugas 6 - KALKULATOR</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php 
	
	if(isset($_POST['hitung'])){
		$bil1 = (double) @$_POST['bil1'];
		$bil2 = (double) @$_POST['bil2'];
		$operasi = @$_POST['operasi'];
		
		switch ($operasi) {
			case 'tambah':
				$hasil = $bil1+$bil2;
			break;
			case 'kurang':
				$hasil = $bil1-$bil2;
			break;
			case 'kali':
				$hasil = $bil1*$bil2;
			break;
			case 'bagi':
				$hasil = $bil1/$bil2;
			break;	
			case 'modulus':
				$hasil = $bil1%$bil2;
			break;		
		}
	}
	?>
	<div class="kalkulator">
		<h2 class="judul">KALKULATOR</h2>
		
        <form method="post" action="tugas6_kalkulator.php">			
			<input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Bilangan Pertama..." value="<?php echo @$_POST['bil1'] ?>">
			<input type="text" name="bil2" class="bil" autocomplete="off" placeholder=" Bilangan Kedua..." value="<?php echo @$_POST['bil2'] ?>">
			<select class="opt" name="operasi">
				<option <?php echo !@$_POST['operasi'] ? 'selected' : '' ?> disabled>Pilih Operator</option>	
				<option <?php echo @$_POST['operasi'] === 'tambah' ? 'selected' : '' ?> value="tambah">+</option>
				<option <?php echo @$_POST['operasi'] === 'kurang' ? 'selected' : '' ?> value="kurang">-</option>
				<option <?php echo @$_POST['operasi'] === 'kali' ? 'selected' : '' ?> value="kali">x</option>
				<option <?php echo @$_POST['operasi'] === 'bagi' ? 'selected' : '' ?> value="bagi">/</option>
			</select>
			<input type="submit" name="hitung" value="Hitung" class="tombol">											
		</form>
		
		<?php if(isset($_POST['hitung'])){ ?>
			<input type="text" value="<?php echo $hasil; ?>" class="bil">
		<?php }else{ ?>
			<input type="text" value="0" class="bil">
		<?php } ?>
		<button class="tombol-clr" type="button" onclick="location.href = '?clear'">Hapus Data</button>			
	</div>
</body>
</html>