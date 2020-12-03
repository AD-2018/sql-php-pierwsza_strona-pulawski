<!DOCTYPE html >
<head>
<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
 <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-pulawski">•github</a>
 <a href="formularz.html">formularze</a>
 <a href="pracownicy_organizacja.php">Pracownicy i Organizacja </a>
 <a href="danedobazy.php">dodawanie/usuwanie pracownika</a>
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
echo('<table border="1" class="tabelka_moja">');
while($row = mysqli_fetch_assoc($result) ) {
   echo('<tr>');
   echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".$row['data_urodzenia']."</td>");
   echo('</tr>');
}
echo('</table>');
?>
</body>
</html>
