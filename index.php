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

        if (date("l") == "Friday" || date("l") == "Saturday" || date("l") == "Sunday") {
        	echo "WEEKEND";
        } else {
        	echo "Nog niet..";
        }
        //echo "Het is nu " . date("l");

        $dt_end = strtotime('next tuesday');
        echo $dt_end;
        $remain = $dt_end->diff(new DateTime());
        echo $remain->d . ' days and ' . $remain->h . ' hours';
        ?>
    </body>
</html>