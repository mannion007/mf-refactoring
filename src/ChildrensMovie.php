<?php

namespace Mannion007\MartinFowlerRefactoring;

class ChildrensMovie extends AbstractMovie implements MovieInterface
{
    public function __construct(string $title)
    {
        parent::__construct($title);
    }

    public function getAmount(int $daysRented)
    {
        $amount = 1.5;
        if ($daysRented > 3) {
            $amount += ($daysRented - 3) * 1.5;
        }
        return $amount;
    }
}
