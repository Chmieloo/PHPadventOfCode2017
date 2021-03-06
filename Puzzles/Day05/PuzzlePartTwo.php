<?php

namespace Puzzles\Day05;

class PuzzlePartTwo extends Puzzle
{
    private $sum = 0;

    public function processInput()
    {
        $start = microtime(true);
        foreach ($this->input as $key => $line) {
            $this->input[$key] = (int)trim($line);
        }

        $start = 0;
        $end = count($this->input) - 1;
        $currentIndex = 0;

        while ($currentIndex >= $start && $currentIndex <= $end) {
            $steps = $this->input[$currentIndex];
            if ($steps >= 3) {
                $this->input[$currentIndex]--;
            } else {
                $this->input[$currentIndex]++;
            }
            $currentIndex = $currentIndex + $steps;
            $this->sum++;
        }
        $this->runTime = microtime(true) - $start;
    }

    public function renderSolution()
    {
        echo 'Solution: ' . $this->sum . PHP_EOL;
        echo 'Run time: ' . $this->runTime . PHP_EOL;
    }
}
