<?php


namespace IgorRinkovec\UnitExample\RealisticExample\Service;

/**
 * Class SlugService
 * @package IgorRinkovec\UnitExample\RealisticExample\Service
 */
class SlugService implements Slugify
{

    /**
     * Converts any text to a URL friendly string.
     *
     * @param string $text
     * @return string
     */
    static public function slugify(string $text): string
    {
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        $text = preg_replace('~[^-\w]+~', '', $text);
        $text = trim($text, '-');
        $text = preg_replace('~-+~', '-', $text);
        $text = strtolower($text);

        return $text;
    }

}