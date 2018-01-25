<?php

include('servisler.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="index.php" method="post">
		<input type="number" name="id" placeholder="Id" value="<?php echo $id ?>"><br><br>
		<input type="text" name="ad" placeholder="Ad" value="<?php echo $ad ?>"><br><br>
		<input type="text" name="soyad" placeholder="Soyad" value="<?php echo $soyad ?>"><br><br>
		<input type="number" name="yas" placeholder="Yas" value="<?php echo $yas ?>"><br><br>
		<div>
			<input type="submit" name="insert" value="Ekle">
			<input type="submit" name="update" value="Güncelle">
			<input type="submit" name="delete" value="Sil">
			<input type="submit" name="search" value="Bul">
		</div>
	</form>

</body>
</html>