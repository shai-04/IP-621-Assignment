<?php
    $grades = array("Sauer Jeppe" => 75,
                    "Von Weilligh" => 44,
                    "Troy Commisioner" => 60,
                    "Paul Krugger" => 62,
                    "Jacob Maree" => 70);

    $output; $colour;

    foreach ($grades as $n => $g) {
        switch (true) {
            case ($g >= 0 && $g < 50):
                $output = "$n has failed.";
                $colour = "#f00";
                break;

            case ($g >= 50 && $g < 70):
                $output = "$n has passed.";
                $colour = "orange";
                break;

            case ($g >= 70 && $g < 101):
                $output = "$n has scored a distinction!";
                $colour = "#0d0";
                break;
            
            default:
                $output = "An invalid mark has been entered for $n.";
                break;
        }

        echo("<tr>" .
                "<td>$n</td>" .
                "<td colspan = \"2\"" .
                    "style = \"color: $colour;\">$g</td>" .
                "<td>$output</td>" .
            "</tr>");
    }
?>