<?php

class ScrabbleCalculator
{
    function pointCalculator($input_word)
    {
        $input_word = strtolower($input_word);
        $input_word = str_split($input_word);
        $totalScore = 0;

        foreach ($input_word as $letter){
            if ($letter == "a" || "e" || "i" || "o" || "u" || "l" || "n" || "r" || "s" || "t"){
                $totalScore += 1;
            }
        }
        return $totalScore;

    }



}


?>
