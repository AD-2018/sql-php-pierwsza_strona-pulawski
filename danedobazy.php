<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="style.css">
  <title>
    Strona główna
  </title>
</head>
<body>
  <nav class="site-nav">
    <button class="side-menu-trigger">Menu</button>
    <aside class="side-menu">
      <ul>
	<li>
          <a href="index.php">
            Strona Główna
          </a>
        </li>      
        <li>
          <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-pulawski">
            Github
          </a>
        </li>
        <li>
          <a href="formularz.html">
            Formularze
          </a>
        </li>
        <li>
          <a href="pracownicy_organizacja.php">
            Pracownicy i Organizacja
          </a>
        </li>
        <li>
          <a href="danedobazy.php">
            Dodawanie i usuwanie pracownika
          </a>
        </li>
        <li>
          <a href="funkcje_agregujace.php">
            Funkcje agregujące 
          </a>
        </li>
      </ul>
  </aside>
  </nav>
  <h1>Paweł Puławski <h1>
 

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

$sql = "SELECT * FROM pracownicy, organizacja WHERE id_org = dzial";

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

    $result = mysqli_query($conn, $sql);
    if ( $result) {
         echo "<br>";
     } else {
       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }

  echo("<h1>Tabelka</h1>");

    echo("<table border='1'>");
    echo("<th>ID</th><th>Imie</th><th>Zarobki</th><th>Data Urodzenia</th><th>Dzial</th><th>Nazwa dzialu</th><th>Usuń Pracownika</th>");
        while($row = mysqli_fetch_assoc($result)) {
            echo('<tr>');
            echo('<td>'.$row['id_pracownicy'].'</td><td>'.$row['imie'].'</td><td>'.$row['zarobki'].'</td><td>'.$row['data_urodzenia'].'</td><td>'.$row['dzial'].'</td><td>'.$row['nazwa_dzial'].'</td>'.
	     '<td>
	    
	     <form action="delete.php" method="POST">
  		<input name="id" value="'.$row['id_pracownicy'].'" hidden>
   		<input type="submit" value="X">
	     </form>
	     
	     </td>');
        echo('</tr>');
    }

    echo('</table>');
?>
</body>
</html>
