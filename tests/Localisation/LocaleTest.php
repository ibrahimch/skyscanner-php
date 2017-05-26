<?php

namespace OzdemirBurak\SkyScanner\Tests\Localisation;

use OzdemirBurak\SkyScanner\Localisation\Locale;

class LocaleTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @group locale-tests
     */
    public function testWithoutApiKey()
    {
        $this->assertEmpty((new Locale(null))->fetch());
    }

    /**
     * @group locale-tests
     */
    public function testWithApiKey()
    {
        $this->assertNotEmpty((new Locale(API_KEY))->fetch());
    }
}
