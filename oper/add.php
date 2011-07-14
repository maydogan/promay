<?php
if (!mysql_connect("localhost", "root", "12345"))
	die("Veritabanina baglanamadi...");
if (!mysql_select_db("foo"))
	die("Veritabani hatali...");

$un = $_POST['username'];
$ad = $_POST['name'];
$sa = $_POST['surname'];
$em = $_POST['email'];
$ps = $_POST['password'];

if (!$un || !$ad || !$sa || !$em || !$ps)
{
	echo 'Lutfen butun bosluklari doldurunuz.';
	exit;
}

$result = mysql_query("select * from kul where username = '" . $un . "'");

echo "Merhaba, " . $un . "<br/>";

if (mysql_fetch_assoc($result)){
	echo "Bu kullanici adi daha önceden eklendi!<br>";
}

else{
	mysql_query("insert into kul (username, name, surname, email) VALUES('$un','$ad','$sa','$em')");
	echo "Kaydiniz tamamlanmıstir . </br>";
}
echo " <a href = \"../index.html\"> Ana Sayfaya Don </a> </br></br>";

?>
