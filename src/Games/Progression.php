<?php

namespace BrainGames\Games\Progression;

use function BrainGames\GameEngine\runGame;

const DESCRIPTION = 'What number is missing in the progression?';

function start()
{
    $getAnswerAndQuestion = function () {
        $progressionLength = 10;
        $startNum = rand(0, 512);
        $step = rand(1, 4);
        $progression = generateProgression($startNum, $step, $progressionLength);
        $hiddenItemIndex = array_rand($progression);
        $correctAnswer = (string) $progression[$hiddenItemIndex];
        $progression[$hiddenItemIndex] = "..";
        $question = implode(' ', $progression);

        return [$correctAnswer, $question];
    };

    runGame(DESCRIPTION, $getAnswerAndQuestion);
}

function generateProgression($startNum, $step, $progressionLength)
{
    $progression = [];

    for ($i = 0; $i < $progressionLength; $i += 1) {
        $progression[$i] = $startNum + $step * $i;
    }

    return $progression;
}
