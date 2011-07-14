<?php
if (!mysql_connect("localhost", "root", "12345"))
	die("Veritabanına bağlanamadı...");
if (!mysql_select_db("foo"))
	die("Veritabanı hatalı...");
	
$result = mysql_query("select * from kul where username = '" . $_POST["username"]. "'");
$row = mysql_fetch_assoc($result);
if ($row){
	mysql_query("delete from kul where username = '".$_POST["username"]."'");
	echo $row["username"]. "adlı kullanıcı veritabanindan silindi...</br>";
}
else
	echo "Bu kullanici kayitlarda bulunmamaktadir...</br>";
	
echo " <a href=\"../index.html\">  Ana Sayfaya Don </a> </br></br>";
?>

