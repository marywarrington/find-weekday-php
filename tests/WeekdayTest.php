<!-- testing with php unit, use this template for guidance -->
<?php
    require_once __DIR__ . '/../src/Weekday.php';

    class WeekdayTest extends PHPUnit_Framework_TestCase
    {
        function test_findDay_returnDate()
        {
            // Arrange
            $test_Weekday = new Weekday;
            $month = 7;
            $day = 1;
            $year = 2000;
            // Act
            $result = $test_Weekday->findDay($month, $day, $year);
            // Assert
            $this->assertEquals("July 1, 2000 is on a Saturday", $result);
        }
    }

 ?>
