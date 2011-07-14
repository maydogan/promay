<?php
if (!mysql_connect("localhost", "root", "12345"))
	die("Veritabanına bağlanamadı...");
if (!mysql_select_db("foo"))
	die("Veritabanı hatalı...");

$result = mysql_query("select * from kul where username = '" . $_POST["username"]. "'");
$row = mysql_fetch_assoc($result);
$a = '<br>';
if ($row) {
	echo "Kullanici adi: ".$row["username"].$a;
	echo "Ad:".$row["name"].$a;
	echo "Soyad: ".$row["surname"].$a;
	echo "Email: ". $row["email"].$a;

} else
	echo "Bu kullanici kayitlarda bulunmamaktadir...</br>";

echo " <a href=\"../index.html\">  Ana Sayfaya Don </a> </br></br>";
?>

