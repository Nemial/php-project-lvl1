<?php

namespace BrainGames\Games\Progression;

use function BrainGames\GameEngine\runGame;

const GAME_NAME = "Brain Progression";
const DESCRIPTION = 'What number is missing in the progression?';

function start(): void
{
    $getAnswerAndQuestion = function () {
        $progressionLength = 10;
        $startNum = rand(0, 512);
        $step = rand(1, 4);
        $progression = generateProgression($startNum, $step, $progressionLength);
        $hiddenItemIndex = array_rand($progression);
        $correctAnswer = (string)$progression[$hiddenItemIndex];
        $progression[$hiddenItemIndex] = "..";
        $question = implode(' ', $progression);

        return [$correctAnswer, $question];
    };

    runGame(GAME_NAME, DESCRIPTION, $getAnswerAndQuestion);
}

function generateProgression(int $startNum, int $step, int $progressionLength): array
{
    $progression = [];

    for ($i = 0; $i < $progressionLength; $i += 1) {
        $progression[$i] = $startNum + $step * $i;
    }

    return $progression;
}
