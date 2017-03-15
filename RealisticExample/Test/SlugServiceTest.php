<?php


namespace IgorRinkovec\UnitExample\RealisticExample\Test;


use IgorRinkovec\UnitExample\RealisticExample\Service\SlugService;

class SlugServiceTest extends BaseSlugifyTest
{
    public function setUp() {
        $this->slugifyService = new SlugService();
    }
}
