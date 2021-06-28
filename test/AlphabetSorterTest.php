<?php

declare(strict_types = 1);

namespace Gkmn\Test;

require_once (__DIR__ . '/../vendor/autoload.php');

use Codeception\PHPUnit\TestCase;
use Gkmn\Src\AlphabetSorter;

final class AlphabetSorterTest extends TestCase {
    public function testSort()
    {
        $alphabetSorter = new AlphabetSorter();

        $payload = 'The sunset sets at twelve o\' clock.';
        $expected = '20 8 5 19 21 14 19 5 20 19 5 20 19 1 20 20 23 5 12 22 5 15 3 12 15 3 11';

        $this->assertEquals($expected, $alphabetSorter->sort($payload));
    }
}
