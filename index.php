<!DOCTYPE HTML>
<html>
    <head>
        <title>
            Opdracht 1
        </title>
    </head>

    <body>
        <?php
        if (date("l") == "Wednesday" || date("l") == "Sunday") {
            echo "<img src='hetisweekend.png' alt='weekend' />";
            echo "JA HET IS WEEKEND!!";
        } else {
            echo "<img src='hetisgeenweekend.png' alt='geenweekend' />";

            $date = strtotime("next saturday");
            $remaining = $date - time();

            $days_remaining = floor($remaining / 86400);
            $hours_remaining = floor(($remaining % 86400) / 3600);
            echo "Nope! Nog $days_remaining dagen en $hours_remaining uur te gaan!";
        }
        ?>
    </body>
</html>