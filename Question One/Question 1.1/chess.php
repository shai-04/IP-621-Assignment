<?php
    $colour = "";

    for ($i=0; $i < 8; $i++) { 
        echo("<tr>");

        for ($j=0; $j < 8; $j++) { 
            $colour = ($colour != "black") ? "black" : "white";

            echo("<td style = \"background: {$colour};\"></td>");

        }

        echo("</tr>");

        $colour = ($colour != "black") ? "black" : "white";
    }
?>