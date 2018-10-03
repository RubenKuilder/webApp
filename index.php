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

        if (date("l") == "Saturday" || date("l") == "Sunday") {
        	echo "WEEKEND";
        } else {
            $date = strtotime("next saturday");
            $remaining = $date - time();

            $days_remaining = floor($remaining / 86400);
            $hours_remaining = floor(($remaining % 86400) / 3600);
            echo "Nog $days_remaining dagen en $hours_remaining uur te gaan!";
        }
        ?>
    </body>
</html>