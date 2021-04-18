<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="style.css">
  <title>
    Paweł Puławski 3Ti
  </title>
</head>
<body>
<?php  include "menu.php"; ?>
  <h1>Paweł Puławski <h1>
    <?php
require_once("connect.php");

 

 
$sql= "SELECT * FROM pracownicy";
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
  </html>
