<?php


namespace IgorRinkovec\UnitExample\BasicExample\Test;


use IgorRinkovec\UnitExample\BasicExample\Service\SumService;
use PHPUnit\Framework\TestCase;

class SumServiceTest extends TestCase
{
    function testSum() {
        $result = SumService::sum(4, 9);

        $this->assertEquals(13, $result);
    }
}
