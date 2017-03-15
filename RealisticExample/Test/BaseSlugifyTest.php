<?php


namespace IgorRinkovec\UnitExample\RealisticExample\Test;


use IgorRinkovec\UnitExample\RealisticExample\Service\Slugify;
use PHPUnit\Framework\TestCase;

class BaseSlugifyTest extends TestCase
{
    /**
     * Service that implements the slugify interface we are trying to test.
     * @var Slugify
     */
    protected $slugifyService = null;

    protected function setUp()
    {
        $this->markTestIncomplete();
    }

    /**
     * Tests the slugify function with regular ASCII text.
     */
    function testASCIIText() {
        $result = $this->slugifyService->slugify("This is a test!");

        $this->assertEquals("this-is-a-test", $result);
    }

    /**
     * Tests the slugify function with diactitic symbols.
     */
    function testDiacritics() {
        $result = $this->slugifyService->slugify("ČĆŽŠĐčćžšđ");

        $this->assertEquals("cczsdcczsd", $result);
    }

    /**
     * Tests the slugify function with emoticons.
     */
    function testEmoticons() {
        $result = $this->slugifyService->slugify("presmjesno😂");

        $this->assertEquals("presmjesno", $result);
    }

    /**
     * Tests the slugify function with special symbols.
     */
    function testSpecialSymbols() {
        $result = $this->slugifyService->slugify("bla</!#$%&'()bla");

        $this->assertEquals("bla-bla", $result);
    }

}
