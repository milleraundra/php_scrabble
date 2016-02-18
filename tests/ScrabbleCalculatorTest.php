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

        function test_slightly_bigger_word()
        {
            //Arrange
            $test_ScrabbleCalculator = new ScrabbleCalculator;
            $scrabbleWord = "dog";

            //Act
            $result = $test_ScrabbleCalculator->pointCalculator($scrabbleWord);

            //Assert
            $this->assertEquals(5, $result);
        }

        function test_big_word()
        {
            //Arrange
            $test_ScrabbleCalculator = new ScrabbleCalculator;
            $scrabbleWord = "adbfkjq";

            //Act
            $result = $test_ScrabbleCalculator->pointCalculator($scrabbleWord);

            //Assert
            $this->assertEquals(33, $result);
        }

    }

?>
