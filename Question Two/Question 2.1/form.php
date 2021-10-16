<?php
    const max = 10;

    for ($i = 1; $i < max + 1; $i++) { 
        echo("<div class = \"brand\">");

        echo(
            "<input type=\"text\" name=\"item{$i}[]\" ".
            "placeholder = \"Brand name for product {$i}\" required>".
            "<input type=\"number\" name=\"item{$i}[]\" ".
            "placeholder = \"Stock for product {$i}\" required>".
            "<input type=\"number\" name=\"item{$i}[]\" ".
            "placeholder = \"Quantity sold for product {$i}\" required>"
        );

        echo("</div>");
    }
?>