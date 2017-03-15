<?php


namespace IgorRinkovec\UnitExample\RealisticExample\Test;


use IgorRinkovec\UnitExample\RealisticExample\Service\BadSlugService;

class BadSlugServiceTest extends BaseSlugifyTest
{
    public function setUp() {
        $this->slugifyService = new BadSlugService();
    }
}
