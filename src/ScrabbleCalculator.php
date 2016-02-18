<?php

class ScrabbleCalculator
{
    function pointCalculator($input_word)
    {
        $input_word = strtolower($input_word);
        $input_word = str_split($input_word);
        $onePoint = array("a", "e" , "i" , "o", "u", "l", "n", "r", "s", "t");
        $twoPoint = array("d", "g");
        $threePoint = array("b", "c", "m", "p");
        $fourPoint = array("f", "h", "v", "w", "p");
        $fivePoint = array("k");
        $eightPoint = array("j", "x");
        $tenPoint = array("q", "z");

        $totalScore = 0;

        foreach ($input_word as $letter){
            foreach ($onePoint as $index => $alphabet) {
                if ($letter == $onePoint[$index]) {
                    $totalScore += 1;
                }
            }
            foreach ($twoPoint as $index => $alphabet) {
                if ($letter == $twoPoint[$index]) {
                    $totalScore += 2;
                }
            }
            foreach ($threePoint as $index => $alphabet) {
                if ($letter == $threePoint[$index]) {
                    $totalScore += 3;
                }
            }
            foreach ($fourPoint as $index => $alphabet) {
                if ($letter == $fourPoint[$index]) {
                    $totalScore += 4;
                }
            }
            foreach ($fivePoint as $index => $alphabet) {
                if ($letter == $fivePoint[$index]) {
                    $totalScore += 5;
                }
            }
            foreach ($eightPoint as $index => $alphabet) {
                if ($letter == $eightPoint[$index]) {
                    $totalScore += 8;
                }
            }
            foreach ($tenPoint as $index => $alphabet) {
                if ($letter == $tenPoint[$index]) {
                    $totalScore += 10;
                }
            }
        }
        return $totalScore;
    }

    function randomLetters($length = 7)
    {
        $characters = "AABCDEEFGHIIJKLMNOOPQRSTUUVWXYZ";
        $charLength = strlen($characters);
        $randomString = '';
        for ($i=0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charLength -1)] . " ";
        }
        return $randomString;
    }
}
?>
