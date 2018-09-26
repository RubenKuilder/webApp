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

        echo "Het is nu " . date("l");
        ?>
    </body>
</html>