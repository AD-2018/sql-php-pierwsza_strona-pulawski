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
  require_once("../connect.php");
 
  echo("<h2>Funkcje Agregujace</h2>");
    
    $sql ="select Sum(zarobki) from pracownicy"; 
echo("<h3>Zadanie 1</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>".$sql."</li>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Suma Zarobkow</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");         
  echo("<td>".$row['Sum(zarobki)']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 
      
    $sql ="select Sum(zarobki) from pracownicy where imie like '%a'"; 
echo("<h3>Zadanie 2</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>".$sql."</li>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Suma Zarobkow Kobiet</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");         
  echo("<td>".$row['Sum(zarobki)']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 
      
    $sql ="select Sum(zarobki) from pracownicy where imie not like '%a' and (dzial=2 or dzial=3)"; 
echo("<h3>Zadanie 3</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
       echo "<li>".$sql."</li>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Suma Zarobkow Mezczyzn z Dzialow 2 i 3</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");         
  echo("<td>".$row['Sum(zarobki)']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 
       
    $sql ="select Avg(zarobki) from pracownicy where imie not like '%a'"; 
echo("<h3>Zadanie 4</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>".$sql."</li>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Srednia Zarobkow Mezczyzn</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");         
  echo("<td>".$row['Avg(zarobki)']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 
     
    $sql ="select Avg(zarobki) from pracownicy where dzial=4"; 
echo("<h3>Zadanie 5</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>".$sql."</li>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Srednia Zarobkow z Dzialu 4</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");         
  echo("<td>".$row['Avg(zarobki)']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 
      
    $sql ="select Avg(zarobki) from pracownicy where imie not like '%a' and (dzial=1 or dzial=2)"; 
echo("<h3>Zadanie 6</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>".$sql."</li>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Srednia Zarobkow Mezczyzn z Dzialu 1 i 2</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");         
  echo("<td>".$row['Avg(zarobki)']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 
      
    $sql ="select Count(imie) from pracownicy"; 
echo("<h3>Zadanie 7</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>".$sql."</li>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Ilosc Pracownikow</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");         
  echo("<td>".$row['Count(imie)']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 
      
    $sql ="select Count(imie) from pracownicy where imie like '%a' and (dzial=1 or dzial=3)"; 
echo("<h3>Zadanie 8</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>".$sql."</li>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Ilosc Kobiet z Dzialu 1 i 3</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");         
  echo("<td>".$row['Count(imie)']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 
    
echo("<h2>Group by</h2>");
    
    $sql ="select nazwa_dzial, Sum(zarobki) from pracownicy,organizacja where dzial=id_org group by nazwa_dzial"; 
echo("<h3>Zadanie 1</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
       echo "<li>".$sql."</li>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Nazwa Dzialu</th><th>Suma Zarobkow</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");         
  echo("<td>".$row['nazwa_dzial']."</td><td>".$row['Sum(zarobki)']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 
    
    $sql ="select nazwa_dzial, Count(imie) from pracownicy,organizacja where dzial=id_org group by nazwa_dzial"; 
echo("<h3>Zadanie 2</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
       echo "<li>".$sql."</li>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Nazwa Dzialu</th><th>Ilosc Pracownikow</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");         
  echo("<td>".$row['nazwa_dzial']."</td><td>".$row['Count(imie)']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 
              
    $sql ="select nazwa_dzial, Avg(zarobki) from pracownicy,organizacja where dzial=id_org group by nazwa_dzial"; 
echo("<h3>Zadanie 3</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>".$sql."</li>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Nazwa Dzialu</th><th>Srednia Zarobkow</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");         
  echo("<td>".$row['nazwa_dzial']."</td><td>".$row['Avg(zarobki)']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 
              
    $sql ="select if(imie like '%a', 'kobiety', 'mezczyzni') as 'plec', Sum(zarobki) from pracownicy,organizacja where dzial=id_org group by plec"; 
echo("<h3>Zadanie 4</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>".$sql."</li>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Plec</th><th>Suma Zarobkow</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");         
  echo("<td>".$row['plec']."</td><td>".$row['Sum(zarobki)']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 
                   
    $sql ="select if(imie like '%a', 'kobiety', 'mezczyzni') as 'plec', Avg(zarobki) from pracownicy,organizacja where dzial=id_org group by plec"; 
echo("<h3>Zadanie 5</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>".$sql."</li>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Plec</th><th>Suma Zarobkow</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");         
  echo("<td>".$row['plec']."</td><td>".$row['Avg(zarobki)']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 
      
echo("<h2>Klauzula HAVING</h2>");
    
    $sql ="select nazwa_dzial, Sum(zarobki) from pracownicy,organizacja where dzial=id_org group by nazwa_dzial having Sum(zarobki)<28"; 
echo("<h3>Zadanie 1</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>".$sql."</li>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Nazwa Dzialu</th><th>Suma Zarobkow < 28</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");         
  echo("<td>".$row['nazwa_dzial']."</td><td>".$row['Sum(zarobki)']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 
        
    $sql ="select nazwa_dzial, Avg(zarobki) from pracownicy,organizacja where dzial=id_org and imie not like '%a' group by nazwa_dzial having Avg(zarobki)>30"; 
echo("<h3>Zadanie 2</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>".$sql."</li>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Nazwa Dzialu</th><th>Srednia Zarobkow Mezczyzn > 30</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");         
  echo("<td>".$row['nazwa_dzial']."</td><td>".$row['Avg(zarobki)']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 
            
    $sql ="select nazwa_dzial, Count(imie) from pracownicy,organizacja where dzial=id_org group by nazwa_dzial having Count(imie)>3"; 
echo("<h3>Zadanie 3</h3>"); 
$result = mysqli_query($conn, $sql);
if ( $result) {
       echo "<li>".$sql."</li>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1" class="tabela"'); 
echo ("<tr><th>Nazwa Dzialu</th><th>Ilosc Pracownikow > 3</th></tr>"); 
while($row=mysqli_fetch_assoc($result)){ 
  echo("<tr>");         
  echo("<td>".$row['nazwa_dzial']."</td><td>".$row['Count(imie)']."</td>");     
  echo("</tr>"); } 
echo('</table>'); 
    
?>
</body>
</html>
