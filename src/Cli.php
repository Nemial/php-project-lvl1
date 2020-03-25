<?php

namespace BrainGames\Cli;

use BrainGames\Games\Even;
use BrainGames\Games\Calc;
use BrainGames\Games\GCD;
use BrainGames\Games\Progression;
use BrainGames\Games\Prime;

use function cli\line;
use function cli\prompt;

function run($description, $gameId)
{
    line("Welcome to the Brain Games!");
    line($description . PHP_EOL);
    $name = prompt("May I have your name?");
    line("Hello, {$name}" . PHP_EOL);
    switch ($gameId) {
        case '1':
            Even\start($name);
            break;
        case '2':
            Calc\start($name);
            break;
        case '3':
            GCD\start($name);
            break;
        case '4':
            Progression\start($name);
            break;
        case '5':
            Prime\start($name);
            break;
        default:
            return;
    }
}
