<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <table style="border: solid black 2px; Text-align: center; border-collapse: collapse;">
            <tr>
                <th style="border: 1px solid black;">Indirizzo</th>
                <th style="border: 1px solid black;">Metri quadri</th>
                <th style="border: 1px solid black;">Prezzo al metro quadro</th>
                <th style="border: 1px solid black;">Prezzo totale</th>
            </tr>
        
        <?php
            $case = array("Indirizzo" => "Via del filarete", "metriQuadri" => 70.5, "prezzoAlMetroQuadro" => 400);
            $case ["prezzoTotale"] = $case["metriQuadri"] * $case["prezzoAlMetroQuadro"];
            
            echo "<tr>";
            foreach ($case as $key) {
                echo "<td style='border: 1px solid black;'>" . $key . "</td>";
            }
            echo "</tr>";

            

        ?>
        </table>
        
    </body>
</html>