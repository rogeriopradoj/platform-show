<?php

namespace RogerioPradoJ;

use Composer\Repository\PlatformRepository;

class PlatformShow
{
    private $composerPlatformRepo;
    private $packages;

    public function __construct()
    {
        $this->composerPlatformRepo = new PlatformRepository;
        $this->packages = $this->composerPlatformRepo->getPackages();
    }

    public function showArray()
    {
        return $this->packages;
    }

    public function show()
    {
        return implode('|', $this->packages);
    }
}
