<?php

    require_once "src/ScrabbleCalculator.php";

    class ScrabbleCalculatorTest extends PHPUnit_Framework_TestCase
    {

        function test_short_word()
        {

            //Arrange
            $test_ScrabbleCalculator = new ScrabbleCalculator;
            $scrabbleWord = "it";

            //Act
            $result = $test_ScrabbleCalculator->pointCalculator($scrabbleWord);

            //Assert
            $this->assertEquals(2, $result);
        }

    }

?>
