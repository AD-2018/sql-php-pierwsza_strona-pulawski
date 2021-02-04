<?php
echo("jestes w autor.php <br>");
echo $_POST['autor'];

$servername = "mysql-kcz.alwaysdata.net";
$username = "kcz";
$password = "zaq1@WSX";
$dbname = "kcz_20";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//definiujemy zapytanie $sql
$sql = "INSERT INTO bibl_autor(id_autor, autor) VALUES(null, "$_POST['autor']");
echo $sql;
if ($conn->query($sql) === TRUE) {
  echo "dodano";
  header('Location: https://pulawski-php.herokuapp.com/biblioteka/biblioteka.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
