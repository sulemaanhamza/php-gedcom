<?php
/**
 * php-gedcom.
 *
 * php-gedcom is a library for parsing, manipulating, importing and exporting
 * GEDCOM 5.5 files in PHP 5.3+.
 *
 * @author          Kristopher Wilson <kristopherwilson@gmail.com>
 * @copyright       Copyright (c) 2010-2013, Kristopher Wilson
 * @license         MIT
 *
 * @link            http://github.com/mrkrstphr/php-gedcom
 */

namespaceGedcom\Parser\Indi;

class Adop extends \Gedcom\Parser\Indi\Even
{
    public static function parseAdop($parser, $even)
    {
        $record = $parser->getCurrentLineRecord();
        if (isset($record[1])) {
            $even->setAdop(trim($record[2]));
        }
    }

    public static function parseFamc($parser, $even)
    {
        $record = $parser->getCurrentLineRecord();
        if (isset($record[1])) {
            $even->setFamc(trim($record[2]));
        }
    }
}
