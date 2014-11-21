<?php

namespace RogerioPradoJ\Test;

use RogerioPradoJ\PlatformShow;
use Composer\Repository\PlatformRepository;
use PHPUnit_Framework_TestCase;

class PlatformShowTest extends PHPUnit_Framework_TestCase
{
    private $shower;
    private $composerPlatformRepository;

    public function setUp()
    {
        $this->shower = new PlatformShow();
    }

    public function tearDown()
    {
        $this->shower = null;
    }

    public function testPlatformPackagesIsArray()
    {
        $this->assertInternalType(
            'array',
            $this->shower->platformPackages
        );
    }

    public function testShowPrintsAString()
    {
        $this->assertInternalType(
            'string',
            $this->shower->show()
        );
    }
}
