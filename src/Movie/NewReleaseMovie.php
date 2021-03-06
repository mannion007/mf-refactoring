<?php

namespace Mannion007\MartinFowlerRefactoring\Movie;

class NewReleaseMovie extends AbstractMovie implements MovieInterface
{
    public function __construct(string $title)
    {
        parent::__construct($title);
    }

    public function getFrequentRenterPointsForRentalLasting(int $daysRented) : int
    {
        if ($daysRented > 1) {
            return 2;
        }
        return 1;
    }

    public function getAmountForRentalLasting(int $daysRented) : float
    {
        return $daysRented * 3;
    }
}
