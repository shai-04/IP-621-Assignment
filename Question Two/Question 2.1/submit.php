<?php
    if (isset($_POST["submit"])) {
        echo("<table id = \"output\">");
            echo("<th>Brand name</th>" .
                 "<th>Number of stock in store</th>" .
                 "<th>Quantity sold</th>");

            foreach ($_POST as $item) {
                if ($item == "Submit Data") continue;

                echo("<tr>");

                for ($i = 0 ; $i < 3; $i++) { 
                    echo("<td>" . $item[$i] . "</td>");
                }

                echo("</tr>");
            }

        echo("</table>");
    }
?>