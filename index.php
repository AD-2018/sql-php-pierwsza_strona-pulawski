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
  <nav class="site-nav">
    <button class="side-menu-trigger">Menu</button>
    <aside class="side-menu">
    <ul>
        <li>
          <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-pulawski">
            Github
          </a>
        </li>
        <li>
          <a href="../index.php">
            Strona główna
          </a>
        </li>
        <li>
          <a href="../pracownicy/pracownicy_organizacja.php">
            Pracownicy organizacja
          </a>
        </li>
        <li>
          <a href="../pracownicy/funkcje_agregujace.php">
            Funkcje Agregujące
          </a>
        </li>
        <li>
          <a href="../pracownicy/danedobazy.php">
            Dodawanie i usuwanie pracownika
          </a>
        </li>
        <li>
          <a href="../inne/formularz.html">
            Formularz 
          </a>
        </li>
        <li>
          <a href="../inne/dataczas.php">
            Data i czas 
          </a>
        </li>
        <li>
          <a href="../biblioteka/biblioteka.php">
            Biblioteka
          </a>
        </li>
        <li>
            <a href="../grid/indexgrid.html">
              Grid
            </a>
          </li>
      </ul>
  </aside>
  </nav>
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
