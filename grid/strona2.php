<!DOCTYPE html>
<html>

<head>
    <title>Pawel Pulawski</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="grid2.css">
</head>

<body>
    <strong>
    <div class="str2">
        <div class="str2A">
        <?php
                        require_once("../connect.php");
                        $sql = "select Klasa, `Imie-Nazwisko`, (`WDW`.ID) as ID_TAB from `jablonski-filip_pbd`.WDW, `jablonski-filip_pbd`.Klasa, `jablonski-filip_pbd`.Osoby where Osoby.ID=osoby_id and Klasa.ID=klasa_id order by ID_TAB asc";
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
                            echo("<th>ID</th><th>Nauczyciel</th><th>Klasa</th>");
                                while($row = mysqli_fetch_assoc($result)) {
                                    echo("<tr>");
                                    echo("<td>".$row['ID_TAB']."</td><td>".$row['Imie-Nazwisko']."</td><td>".$row['Klasa']."</td>");
                                    echo("</tr>");
                                };
                            echo("</table>");
                            echo ("<br>");
                ?>
        </div>
        <div class="str2B">
        <?php
                require_once("../connect.php");
                $sql = "SELECT * FROM Osoby";
                
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                      }
                
                    $result = mysqli_query($conn, $sql);
                    if ( $result) {
                         echo "<br>";
                     } else {
                       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                     }
                
                    echo("<h1>Nauczyciele</h1>");
                
                    echo("<table border='1'>");
                    echo("<th>ID</th><th>Imię i Nazwisko</th>");
                        while($row = mysqli_fetch_assoc($result)) {
                            echo("<tr>");
                            echo("<td>".$row['ID']."</td><td>".$row['Imie-Nazwisko']."</td>");
                            echo("</tr>");
                        };
                    echo("</table>");
                    echo ("<br>");
            ?>
        </div>
        <div class="str2C">
        <?php
                require_once("../connect.php");
                $sql = "SELECT * FROM Klasa";
                
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                      }
                
                    $result = mysqli_query($conn, $sql);
                    if ( $result) {
                         echo "<br>";
                     } else {
                       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                     }
                
                    echo("<h1>Klasa</h1>");
                
                    echo("<table border='1'>");
                    echo("<th>ID</th><th>Klasa</th>");
                        while($row = mysqli_fetch_assoc($result)) {
                            echo("<tr>");
                            echo("<td>".$row['ID']."</td><td>".$row['Klasa']."</td>");
                            echo("</tr>");
                        };
                    echo("</table>");
                    echo ("<br>");
            ?>
        </div>
        <div class="str2D">4</div>
        <div class="str2E">5</div>
        <div class="str2F">Szkoła</div>
    </div>
    </strong>
</body>

</html>