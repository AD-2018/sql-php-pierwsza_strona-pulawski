<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="../style.css">
  <title>
    Paweł Puławski
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
      </ul>
  </aside>
  </nav>
  <h1>Paweł Puławski <h1>
    
<?php

echo("<h1>Biblioteka</h1>");
    
$servername = "mysql-kcz.alwaysdata.net";
$username = "kcz";
$password = "zaq1@WSX";
$dbname = "kcz_20";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
  
$sql = "SELECT * FROM bibl_autor";
$wynik = mysqli_query($conn, $sql);
    
echo('<label for="Autor">Autor:</label>');
echo('<select name="Autor">');
    while($wiersz=mysqli_fetch_assoc($wynik))
    {
        echo'<option value="'.$wiersz['id_autor'].'">';
        echo($wiersz['autor']);
        echo"</option>"; 
    }
echo('</select>');

echo('<br>');
echo('<h1>Dodaj autora</h1>');
echo('<form action="/ksiazki/autor.php" method="POST">
        <label>Autor</label><input type="text" name="autor">
        </br>
        <input type="submit" value="Dodaj autora">');

echo("<br>");
   
$sql = "SELECT * FROM bibl_tytul";
$wynik = mysqli_query($conn, $sql);
    
echo('<label for="Ksiazka">Książka:</label>');
echo('<select name="Ksiazka">');
    while($wiersz=mysqli_fetch_assoc($wynik))
    {
        echo'<option value="'.$wiersz['id_tytul'].'">';
        echo($wiersz['tytul']);
        echo"</option>"; 
    }
echo('</select>');
    
echo("<br>");
   
    
$sql = "SELECT * FROM bibl_autor";
$wynik = mysqli_query($conn, $sql);
    
    echo("<br>");
    echo("Autorzy");
    echo("<br>");
    echo($sql);
    echo('<table border="1">');
    echo('<th>ID autora</th><th>Autor</th>');

    while($wiersz=mysqli_fetch_assoc($wynik))
    {
        echo('<tr>');
        echo('<td>'.$wiersz['id_autor'].'</td>'.'<td>'.$wiersz['autor'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
echo("<br>");
  
$sql = "SELECT * FROM bibl_tytul";
$wynik = mysqli_query($conn, $sql);
    
    echo("<br>");
    echo("Ksiązki");
    echo("<br>");
    echo($sql);
    echo('<table border="1">');
    echo('<th>ID tytułu</th><th>Tytuł</th>');

    while($wiersz=mysqli_fetch_assoc($wynik))
    {
        echo('<tr>');
        echo('<td>'.$wiersz['id_tytul'].'</td>'.'<td>'.$wiersz['tytul'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
echo("<br>");
  
$sql = "SELECT * FROM bibl_book";
$wynik = mysqli_query($conn, $sql);
    
    echo("<br>");
    echo("Tabele");
    echo("<br>");
    echo($sql);
    echo('<table border="1">');
    echo('<th>ID książki</th><th>ID autora</th><th>ID tytułu</th><th>Wypożyczenie</th>');

    while($wiersz=mysqli_fetch_assoc($wynik))
    {
        echo('<tr>');
        echo('<td>'.$wiersz['id_book'].'</td>'.'<td>'.$wiersz['id_autor'].'</td>'.'<td>'.$wiersz['id_tytul'].'</td>'.'<td>'.$wiersz['wypoz'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
echo("<br>");
    
$sql = "SELECT id_book, autor, tytul, wypoz FROM bibl_book, bibl_tytul, bibl_autor WHERE bibl_tytul.id_tytul = bibl_book.id_tytul AND bibl_autor.id_autor = bibl_book.id_autor";
$wynik = mysqli_query($conn, $sql);
    
    echo("<br>");
    echo("Książki i Autorzy");
    echo("<br>");
    echo($sql);
    echo('<table border="1">');
    echo('<th>ID książki</th><th>Autor</th><th>Tytuł</th><th>Wypożyczenie</th>');

    while($wiersz=mysqli_fetch_assoc($wynik))
    {
        echo('<tr>');
        echo('<td>'.$wiersz['id_book'].'</td>'.'<td>'.$wiersz['autor'].'</td>'.'<td>'.$wiersz['tytul'].'</td>'.'<td>'.$wiersz['wypoz'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
echo("<br>");
    
?>
    
</body>
</html>
