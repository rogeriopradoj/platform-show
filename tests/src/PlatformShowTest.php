<?php

namespace RogerioPradoJ\Test;

use PHPUnit_Framework_TestCase;

class PlatformShowTest extends PHPUnit_Framework_TestCase
{
    public function testShowPrintsAString()
    {
        $this->assertInternalType(
            'string',
            \RogerioPradoJ\PlatformShow::show()
        );
    }
}
