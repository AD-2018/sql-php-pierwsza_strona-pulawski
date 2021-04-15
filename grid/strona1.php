<!DOCTYPE html>
<html>

<head>
    <title>Pawel Pulawski</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="grid.css">
</head>

<body>
    <strong>
    <div class="str1">
        <div class="str1A">
        <?php
                        require_once("../connect.php");
                        $sql = "SELECT * FROM biblTytul";
                        
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                              }
                        
                            $result = mysqli_query($conn, $sql);
                            if ( $result) {
                                 echo "<br>";
                             } else {
                               echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                             }
                        
                            echo("<h1>Tytuły</h1>");
                        
                            echo("<table border='1'>");
                            echo("<th>ID</th><th>Tytuł</th>");
                                while($row = mysqli_fetch_assoc($result)) {
                                    echo("<tr>");
                                    echo("<td>".$row['id']."</td><td>".$row['tytul']."</td>");
                                    echo("</tr>");
                                };
                            echo("</table>");
                            echo ("<br>");
                ?>
        </div>
        <div class="str1B">
        <?php
                        require_once("../connect.php");
                        $sql = "SELECT * FROM biblAutor";
                        
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                              }
                        
                            $result = mysqli_query($conn, $sql);
                            if ( $result) {
                                 echo "<br>";
                             } else {
                               echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                             }
                        
                            echo("<h1>Autorzy</h1>");
                        
                            echo("<table border='1'>");
                            echo("<th>ID</th><th>Autor</th>");
                                while($row = mysqli_fetch_assoc($result)) {
                                    echo("<tr>");
                                    echo("<td>".$row['id']."</td><td>".$row['autor']."</td>");
                                    echo("</tr>");
                                };
                            echo("</table>");
                            echo ("<br>");
                ?>
        </div>
        <div class="str1C">3</div>
        <div class="str1D">
        <?php
                        require_once("../connect.php");
                        $sql = "select (`biblAutor_biblTytul`.id) as ID_TAB, autor, tytul, biblWypoz from biblAutor_biblTytul,biblAutor,biblTytul where biblAutor.id=biblAutor_id and biblTytul.id=biblTytul_id order by autor,ID_TAB asc";
                            if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                             }
                                $result = mysqli_query($conn, $sql);
                            if ( $result) {
                            } else {
                                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                            }
                        
                            echo("<h1>Wiele do Wielu</h1>");
                        
                            echo("<table border='1'>");
                            echo("<th>ID</th><th>Tytuł</th><th>Autor</th>");
                                while($row = mysqli_fetch_assoc($result)) {
                                    echo("<tr>");
                                    echo("<td>".$row['ID_TAB']."</td><td>".$row['tytul']."</td><td>".$row['autor']."</td>");
                                    echo("</tr>");
                                };
                            echo("</table>");
                            echo ("<br>");
                ?>
        </div>
        <div class="str1E">Biblioteka</div>
    </div>
    </strong>
</body>

</html>