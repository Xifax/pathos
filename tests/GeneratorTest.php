<?php

use Pathos\Generator;

/**
 * Run some tests for our generator
 */
class NachoTest extends PHPUnit_Framework_TestCase {

    /**
     * Assert that it can actually generate something
     */
    public function testCanGenerateUrl()
    {
        $url = Generator::url();
        $this->assertInternalType('string', $url);
        $this->assertStringMatchesFormat('%s', $url);
    }

    /**
     * Test for no repetitions on default settings
     */
    public function testNoRepetitions()
    {
        $results = [];
        foreach(range(0, 99999) as $cycle) {
            $result = Generator::url();
            $this->assertArrayNotHasKey($result, $results);
            array_push($results, $result);
        }
    }

}