<!DOCTYPE html>
<html>

<head>
	<title>Pawel Pulawski</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="grid4.css">
</head>
<body>
    <strong>
    <div class="str4">
        <div class="str4A">
        <?php
                require_once("../connect.php");
                $sql = "SELECT * FROM auta";
                
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                      }
                
                    $result = mysqli_query($conn, $sql);
                    if ( $result) {
                         echo "<br>";
                     } else {
                       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                     }
                
                    echo("<h1>Mechanicy</h1>");
                
                    echo("<table border='1'>");
                    echo("<th>ID</th><th>Auta</th>");
                        while($row = mysqli_fetch_assoc($result)) {
                            echo("<tr>");
                            echo("<td>".$row['id']."</td><td>".$row['auto']."</td>");
                            echo("</tr>");
                        };
                    echo("</table>");
                    echo ("<br>");
            ?>
        </div>
        <div class="str4B">
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
                
                    echo("<h1>Mechanicy</h1>");
                
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
        <div class="str4C">
        <?php
                        require_once("../connect.php");
                        $sql = "select auto, `Imie-Nazwisko`, (`WDW`.ID) as ID_TAB from `pawelpulawski_pbd`.WDW, `pawelpulawski_pbd`.auta, `pawelpulawski_pbd`.Osoby where Osoby.ID=osoby_id and auta.id=klasa_id order by ID_TAB asc";
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
                            echo("<th>ID</th><th>Mechanik</th><th>Auto</th>");
                                while($row = mysqli_fetch_assoc($result)) {
                                    echo("<tr>");
                                    echo("<td>".$row['ID_TAB']."</td><td>".$row['Imie-Nazwisko']."</td><td>".$row['auto']."</td>");
                                    echo("</tr>");
                                };
                            echo("</table>");
                            echo ("<br>");
                ?>
        </div>
        <div class="str4D">4</div>
        <div class="str4E">Serwis Samochodowy</div>
    </div>
    </strong>
</body>
</html>