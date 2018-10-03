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
            echo "<img src='hetisweekend.png' alt='weekend' />";
            echo "WEEKEND";
        } else {
            echo "<img src='hetisgeenweekend.png' alt='geenweekend' />";

            $date = strtotime("next saturday");
            $remaining = $date - time();

            $days_remaining = floor($remaining / 86400);
            $hours_remaining = floor(($remaining % 86400) / 3600);
            echo "Nog $days_remaining dagen en $hours_remaining uur te gaan!";
        }
        ?>
    </body>
</html>