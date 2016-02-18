<?php
    class Weekday
    {
        function findDay($month, $day, $year)
        {
            date_default_timezone_set('UTC');

            return date("F", mktime(0, 0, 0, $month, $day, $year)) . " $day, $year is on a " . date("l", mktime(0, 0, 0, $month, $day, $year));

        }

    }
?>
