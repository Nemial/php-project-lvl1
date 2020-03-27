<?php

namespace BrainGames\Games\Progression;

use function BrainGames\GameEngine\engine;

const DESCRIPTION = 'What number is missing in the progression?';

function start($name)
{
    $getAnswerAndQuestion = function () {
        $startNum = rand(0, 512);
        $step = rand(1, 4);
        $progression = generateProgression($startNum, $step);
        $hiddenItemIndex = array_rand($progression);
        $correctAnswer = (string) $progression[$hiddenItemIndex];
        $progression[$hiddenItemIndex] = "..";
        $question = implode(' ', $progression);

        return [$question, $correctAnswer];
    };

    engine(DESCRIPTION, $getAnswerAndQuestion, $name);
}

function generateProgression($startNum, $step)
{
    $lengtProgression = 10;
    $progression = [];

    for ($i = 0; $i < $lengtProgression; $i += 1) {
        $progression[$i] = $startNum + $step * $i;
    }

    return $progression;
}
