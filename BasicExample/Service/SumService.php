<?php


namespace IgorRinkovec\UnitExample\BasicExample\Service;


/**
 * Class SumService
 * @package IgorRinkovec\UnitExample\BasicExample
 */
class SumService
{

    /**
     * Adds the parameters and returns the result.
     *
     * @param int $a
     * @param int $b
     * @return int
     */
    static function sum(int $a, int $b): int {
        return $a + $b;
    }

}