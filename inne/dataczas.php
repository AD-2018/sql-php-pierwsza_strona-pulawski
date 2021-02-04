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
      </ul>
  </aside>
  </nav>
  <h1>Paweł Puławski <h1>
    <?php
$servername = "mysql-kcz.alwaysdata.net";
$username = "kcz";
$password = "zaq1@WSX";
$dbname = "kcz_20";
$conn = new mysqli($servername, $username, $password, $dbname);
 
echo("<h2>Data i Czas</h2>");
    
    $sql ="select *,YEAR(curdate())-YEAR(data_urodzenia) AS wiek from pracownicy,organizacja where id_org=dzial"; 
echo("<h3>Zadanie 1</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>".$sql."</li>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Imie</th><th>Dzial</th><th>Wiek</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");         
  echo("<td>".$row['imie']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['wiek']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 
              
    $sql ="select *,YEAR(curdate())-YEAR(data_urodzenia) AS wiek from pracownicy,organizacja where id_org=dzial and dzial=1"; 
echo("<h3>Zadanie 2</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>".$sql."</li>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Imie</th><th>Dzial</th><th>Wiek</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");         
  echo("<td>".$row['imie']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['wiek']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 
          
    $sql ="select *,SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) as Suma from pracownicy,organizacja where id_org=dzial"; 
echo("<h3>Zadanie 3</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>".$sql."</li>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Suma Lat</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");         
  echo("<td>".$row['Suma']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 
               
    $sql ="select *,SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) as Suma from pracownicy,organizacja where id_org=dzial and dzial=2"; 
echo("<h3>Zadanie 4</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>".$sql."</li>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Suma Lat Dzialu Handel</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");         
  echo("<td>".$row['Suma']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 
               
    $sql ="select *,SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) as Suma from pracownicy,organizacja where id_org=dzial and imie like'%a'"; 
echo("<h3>Zadanie 5</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>".$sql."</li>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Suma Lat Kobiet</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");         
  echo("<td>".$row['Suma']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 
                              
    $sql ="select *,SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) as Suma from pracownicy,organizacja where id_org=dzial and imie not like'%a'"; 
echo("<h3>Zadanie 6</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>".$sql."</li>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Suma Lat Mezczyzn</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");         
  echo("<td>".$row['Suma']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 
               
    $sql ="select *,AVG(YEAR(CURDATE()) - YEAR(data_urodzenia)) as srednia from pracownicy,organizacja where id_org=dzial group by dzial"; 
echo("<h3>Zadanie 7</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>".$sql."</li>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Srednia Wieku</th><th>Nazwa Dzialu</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");         
  echo("<td>".$row['srednia']."</td><td>".$row['nazwa_dzial']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 
               
    $sql ="select *,SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) as Suma from pracownicy,organizacja where id_org=dzial group by dzial"; 
echo("<h3>Zadanie 8</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>".$sql."</li>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Suma Lat</th><th>Nazwa Dzialu</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");         
  echo("<td>".$row['Suma']."</td><td>".$row['nazwa_dzial']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 
                    
    $sql ="select *,MAX(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek from pracownicy,organizacja where id_org=dzial group by dzial"; 
echo("<h3>Zadanie 9</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>".$sql."</li>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Imie</th><th>Wiek</th><th>Nazwa Dzialu</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");         
  echo("<td>".$row['imie']."</td><td>".$row['wiek']."</td><td>".$row['nazwa_dzial']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 
                                
    $sql ="select *,MIN(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek from pracownicy,organizacja where id_org=dzial and dzial=1 or dzial=2 group by dzial"; 
echo("<h3>Zadanie 10</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>".$sql."</li>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Wiek</th><th>Nazwa Dzialu</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");         
  echo("<td>".$row['wiek']."</td><td>".$row['nazwa_dzial']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 
                                         
    $sql ="select *,MIN(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek from pracownicy,organizacja where id_org=dzial and dzial=1 or dzial=2 group by dzial"; 
echo("<h3>Zadanie 11</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>".$sql."</li>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Imie</th><th>Wiek</th><th>Nazwa Dzialu</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");         
  echo("<td>".$row['imie']."</td><td>".$row['wiek']."</td><td>".$row['nazwa_dzial']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 
                                                  
    $sql ="select *,DATEDIFF(CURDATE(),data_urodzenia) as wiek from pracownicy,organizacja where id_org=dzial"; 
echo("<h3>Zadanie 12</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>".$sql."</li>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Imie</th><th>Dlugosc Zycia w Dniach</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");         
  echo("<td>".$row['imie']."</td><td>".$row['wiek']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 
                             
    $sql ="select *,MAX(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek from pracownicy,organizacja where id_org=dzial and imie not like '%a'"; 
echo("<h3>Zadanie 13</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>".$sql."</li>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Najstarsz Pracownik</th><th>Wiek</th><th>Nazwa Dzialu</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");         
  echo("<td>".$row['imie']."</td><td>".$row['wiek']."</td><td>".$row['nazwa_dzial']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 
      
    echo("<h2>Formatowanie Dat</h2>");
                                 
    $sql ="select *,DATE_FORMAT(data_urodzenia,'%W-%m-%Y') as wiek from pracownicy,organizacja where id_org=dzial"; 
echo("<h3>Zadanie 1</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>".$sql."</li>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Imie</th><th>Wiek</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");         
  echo("<td>".$row['imie']."</td><td>".$row['wiek']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 
                                      
$sql1 = "SET lc_time_names = 'pl_PL'";
$sql2 = "SELECT DATE_FORMAT(CURDATE(), '%W')as data";
echo("<h3>Zadanie 2</h3>"); 
$result1 = mysqli_query($conn, $sql1);
$result2 = mysqli_query($conn, $sql2);
if ( $result2||$result1) {
        echo "<li>".$sql1."</li><br><li>".$sql2."</li>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Dzien</th></tr>"); 
while($row=mysqli_fetch_assoc($result2)){ 
  echo("<tr>");         
  echo("<td>".$row['data']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 
                                      
    $sql ="select *, DATE_FORMAT(data_urodzenia,'%W-%M-%Y') as data from pracownicy"; 
echo("<h3>Zadanie 3</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>".$sql."</li>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Imie</th><th>Data Urodzenia</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");         
  echo("<td>".$row['imie']."</td><td>".$row['data']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 
                                          
    $sql ="select curtime(4) as data"; 
echo("<h3>Zadanie 4</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>".$sql."</li>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Aktualna Godzina</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");         
  echo("<td>".$row['data']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 
                                              
    $sql ="select *, DATE_FORMAT(data_urodzenia,'%Y-%M-%W') as data from pracownicy"; 
echo("<h3>Zadanie 5</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>".$sql."</li>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Imie</th><th>Data Urodzenia</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");         
  echo("<td>".$row['imie']."</td><td>".$row['data']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 
                                                  
    $sql ="select imie,DATEDIFF(CURDATE(),data_urodzenia)*24 as godziny, DATEDIFF(CURDATE(),data_urodzenia)*24*60 as minuty FROM pracownicy"; 
echo("<h3>Zadanie 6</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>".$sql."</li>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Imie</th><th>Ilosc Godzin</th><th>Ilosc Minut</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");         
  echo("<td>".$row['imie']."</td><td>".$row['godziny']."</td><td>".$row['minuty']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 
                                                      
    $sql ="select DATE_FORMAT('2002-10-30', '%j') as data"; 
echo("<h3>Zadanie 7</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>".$sql."</li>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Dzien Urodzin</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");         
  echo("<td>".$row['data']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 
                                                      
$sql = "SELECT DATE_FORMAT(data_urodzenia,'%W') as dzien, imie, data_urodzenia FROM pracownicy ORDER BY CASE
          WHEN dzien = 'poniedziałek' THEN 1
          WHEN dzien = 'wtorek' THEN 2
          WHEN dzien = 'środa' THEN 3
          WHEN dzien= 'czwartek' THEN 4
          WHEN dzien = 'piątek' THEN 5
          WHEN dzien = 'sobota' THEN 6
          WHEN dzien = 'niedziela' THEN 7
       END ASC";
echo("<h3>Zadanie 8</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>".$sql."</li>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Imie</th><th>Data Urodzenia</th><th>Dzien</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");         
  echo("<td>".$row['imie']."</td><td>".$row['data_urodzenia']."</td><td>".$row['dzien']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 
                                                      
    $sql ="select Count(DATE_FORMAT(data_urodzenia, '%W')) as data FROM pracownicy where DATE_FORMAT(data_urodzenia, '%W')='poniedziałek'"; 
echo("<h3>Zadanie 9</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>".$sql."</li>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Ilosc Pracownikow Urodzonych w Poniedzialek</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");         
  echo("<td>".$row['data']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 
                                                              
    $sql ="select Count(DATE_FORMAT(data_urodzenia, '%W')) as ilosc, DATE_FORMAT(data_urodzenia, '%W') as dzien FROM pracownicy group by dzien ORDER BY 
     CASE 
          WHEN dzien = 'poniedziałek' THEN 1
          WHEN dzien = 'wtorek' THEN 2
          WHEN dzien = 'środa' THEN 3
          WHEN dzien= 'czwartek' THEN 4
          WHEN dzien = 'piątek' THEN 5
          WHEN dzien = 'sobota' THEN 6
          WHEN dzien = 'niedziela' THEN 7
     END ASC"; 
echo("<h3>Zadanie 10</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>".$sql."</li>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Dzien Tygodnia</th><th>Ilosc Pracownikow Urodzonych w Tym Dniu</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");         
  echo("<td>".$row['dzien']."</td><td>".$row['ilosc']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 
        
?>
</body>
</html>
