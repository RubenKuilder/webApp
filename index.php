<!DOCTYPE HTML>
<html>
    <head>
        <title>
            Opdracht 1
        </title>
    </head>

    <body>
        <?php
        $dayofweek = date('w', strtotime($date));

        if (date("l") == "Friday") {
        	echo "WEEKEND";
        } else {
        	echo "Nog niet..";
        }
        //echo "Het is nu " . date("l");
        ?>
    </body>
</html>