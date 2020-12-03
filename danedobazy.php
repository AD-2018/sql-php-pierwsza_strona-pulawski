<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Prosty Formuarz</title>
</head>
<body>

<h3>dodawanie pracownika</h3>
<form action="insert.php" method="POST">
	    		<a>Imie:</a><input type="text" name="imie">
			<a>Dział:</a><input type="text" name="dzial"></br>
			<a>Zarobki:</a><input type="text" name="zarobki"></br>
			<a>Data Urodzenia:</a><input type="text" name="data_urodzenia"></br>
			<input type="submit" value="Dodaj pracownika">
</form>
<h3>usuwanie pracownika</h3>
<form action="delete.php" method="POST">
   <input type="number" name="id"></br>
   <input type="submit" value="Usuń pracownika">
</form>
<?php
$servername = "mysql-kcz.alwaysdata.net";
$username = "kcz";
$password = "zaq1@WSX";
$dbname = "kcz_20";

$conn = new mysqli($servername, $username, $password, $dbname);
 
$conn = new mysqli($servername, $username, $password, $dbname);
 
$sql= "SELECT * FROM pracownicy";
echo("<h1>Paweł Puławski </h1>");
echo("<li>".$sql."<br><br>");
$result = mysqli_query($conn, $sql);
echo ("<br>");
    echo($sql);
    echo('<table border="1">');
    echo('<th>ID</th><th>Imię</th><th>Dział</th><th>Zarobki</th><th>Data urodzenia</th><th>Usuwanie pracowników</th>');

while($row = mysqli_fetch_assoc($result) ) {
   echo('<tr>');
   echo('<td>'.$wiersz['id_pracownicy'].'</td>'.'<td>'.$wiersz['imie'].'</td>'.'<td>'.$wiersz['dzial'].'</td>'.'<td>'.$wiersz['zarobki'].'</td>'.'<td>'.$wiersz['data_urodzenia'].'</td>'.
	     
	     '<td>
	    
	     <form action="delete.php" method="POST">
  		<input type="hidden" name="id" value="'4'">
   		<input type="submit" value="Usuń pracownika">
	     </form>
	     
	     </td>');
   echo('</tr>');
}
echo('</table>');
?>
</body>
</html>
