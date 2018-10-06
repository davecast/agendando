<?php 

    function transpileDate ($date) {
        $arrayDate = explode("-", $date, 3);

        $year = $arrayDate[0];
        $moth = $arrayDate[1];
        $day = $arrayDate[2];

        $date="$day/$moth/$year";

        return $date;
    }

    function transpileTime ($time, $style = "normal") {
        $arrayTime = explode(":", $time, 3);

        $hour = $arrayTime[0];
        $min = $arrayTime[1];
        $sec = $arrayTime[2];

        if ($hour >= 12) {
            $format = "pm";
        } else {
            $format = "am";
        }

        $time = ($style == "normal") ? "{$hour}:{$min} {$format}" : "{$hour}:{$min}:{$sec} {$format}";

        return $time;
    }

?>