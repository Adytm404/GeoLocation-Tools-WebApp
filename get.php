<?php 

// $field = explode(',', $_GET['latlon']);

$id = $_GET['id'];
$idlat = $id;
$del = "?";
$del2 = "=";

$token = strtok($id, $del);
$token2 = strtok($del2, $idlat);
$sambung = $token."?latlon=";
$latlon = trim($id, $sambung); 

// $latlon = $_GET['latlon'];


$file = fopen("result/".$token."/test.txt", "w") or die ("File tidak bisa dibuat!");
$time = time();
$isi = $time."/".$latlon;
fwrite($file, $isi);
fclose($file);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="refresh" content="0; URL='http://google.com'"/>  -->
    <title>Document</title>
</head>
<body>

<h1>Ini adalah id1: <?= $id?></h1>
<h1>Ini adalah id: <?= $token?></h1>
<h1>Ini adalah lat: <?= $latlon?></h1>
<h1>Ini adalah kata: <?= $sambung?></h1>
    
</body>
</html>