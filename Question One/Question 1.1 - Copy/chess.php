<?php
    $colour = "black";

    for ($i=0; $i < 8; $i++) { 
        echo("<tr>");
        for ($j=0; $j < 8; $j++) { 
            echo("<td style = \"background: {$colour};\"></td>");

            $colour = ($colour != "black") ? "black" : "white";
        }
        echo("</tr>");
    }
?>