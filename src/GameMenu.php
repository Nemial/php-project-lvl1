<?php

namespace BrainGames\GameMenu;

use BrainGames\Games\{Calc, Even, GCD, Prime, Progression};

use function cli\line;
use function cli\prompt;

function startMenu()
{
    line("Welcome to the Brain Games!" . PHP_EOL);
    line("1 - Brain Calc\t2 - Brain Even");
    line("3 - Brain GCD\t4 - Brain Prime");
    line("5 - Brain Progression" . PHP_EOL);
    $game = prompt("What game do you want to play");
    line();
    switch ($game) {
        case '1':
            Calc\start();
            break;
        case '2':
            Even\start();
            break;
        case '3':
            GCD\start();
            break;
        case '4':
            Prime\start();
            break;
        case '5':
            Progression\start();
            break;
    }
}
