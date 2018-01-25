<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "kisiler";

$id = "";
$ad = "";
$soyad = "";
$yas = "";


mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try{
$conncet = mysqli_connect($host, $user, $password, $database);
}catch(Exception $ex){
	echo "Hata oldu !";
}

function getPosts()
{
	$post = array();
	$post[0] = $_POST['id'];
	$post[1] = $_POST['ad'];
	$post[2] = $_POST['soyad'];
	$post[3] = $_POST['yas'];

	return $post;
}

//arama

if (isset ($_POST['search']))
{
	$data = getPosts();

	$search_Query = "SELECT * FROM bilgiler WHERE id = $data[0]";

	$search_Result = mysqli_query($conncet, $search_Query);

	if ($search_Result)
	{
		if(mysqli_num_rows($search_Result))
		{
			while($row = mysqli_fetch_array($search_Result))
			{
				$id = $row['id'];
				$ad = $row['ad'];
				$soyad = $row['soyad'];
				$yas = $row['yas'];
			}
		}
		else
		{
			echo "Bu ID ye ait veri yok !";
		}
	}
	else
	{
		echo "Hata oldu !";
	}
}

//ekle

if(isset($_POST['insert']))
{
	$data = getPosts();
	$insert_Query = "INSERT INTO bilgiler(ad, soyad, yas) VALUES ('$data[1]','$data[2]','$data[3]')";
	try{
		$insert_Result = mysqli_query($conncet, $insert_Query);
		if($insert_Result)
		{
			if(mysqli_affected_rows($conncet) > 0)
			{
				echo 'Veri Eklendi';
			}
			else
			{ 
				echo 'Hata oldu !';
			}
		}
	}
	catch(Exception $ex){
		echo 'Hata oldu !'.$ex->getMessage();
	}
}

//sil

if(isset($_POST['delete']))
{
	$data = getPosts();
	$delete_Query = "DELETE FROM bilgiler WHERE id = $data[0]";
	try{
		$delete_Result = mysqli_query($conncet, $delete_Query);

		if($delete_Result)
		{
			if(mysqli_affected_rows($conncet) > 0)
			{
				echo 'Veri Silindi';
			}
			else
			{ 
				echo 'Hata oldu !';
			}
		}
	}
	catch(Exception $ex){
		echo 'Hata oldu !'.$ex->getMessage();
	}
}

//guncelle

if(isset($_POST['update']))
{
	$data = getPosts();
	$update_Query = "UPDATE bilgiler SET ad=$data[1], soyad=$data[2], yas=$data[3] WHERE id=$data[0]";
	try{
		$update_Result = mysqli_query($conncet, $update_Query);

		if($update_Result)
		{
			if(mysqli_affected_rows($connect) > 0)
			{
				echo 'Veri Gencellenildi';
			}
			else
			{ 
				echo 'Hata oldu !';
			}
		}
	}
	catch(Exception $ex){
		echo 'Hata oldu !'.$ex->getMessage();
	}
}

 ?>

