<?php


namespace IgorRinkovec\UnitExample\RealisticExample\Service;


interface Slugify
{
    /**
     * Converts any text to a URL friendly string.
     *
     * @param string $text
     * @return string
     */
    static public function slugify(string $text): string;
}