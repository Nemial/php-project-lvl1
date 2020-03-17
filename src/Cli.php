<?php

namespace BrainGames\Cli;

use BrainGames\Even;

use function cli\line;
use function cli\prompt;

function run()
{
    line("Welcome to the Brain Games!");
    line("Answer \"yes\" if the number is even, otherwise answer \"no\".");
    line();
    $name = prompt("May I have your name?");
    line("Hello, {$name}");
    line();
    Even\run($name);
}
