<?php

$servername = "mysql-kcz.alwaysdata.net";
$username = "kcz";
$password = "zaq1@WSX";
$dbname = "kcz_20";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO pracownicy (id, imie, dzial, zarobki,data_urodzenia) 
       VALUES (null,".'"'.$_POST['imie'].'"'.','.$_POST['dzial'].','.$_POST['zarobki'].','.'"'.$_POST['data_urodzenia'].'"'.')';


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {

  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
