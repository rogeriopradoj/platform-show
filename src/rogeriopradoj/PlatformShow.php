<?php

namespace RogerioPradoJ;

use Composer\Repository\PlatformRepository;

class PlatformShow
{
    private $composerPlatformRepo;
    public $platformPackages;

    public function __construct()
    {
        $this->composerPlatformRepo = new PlatformRepository;
        $this->platformPackages = $this->composerPlatformRepo->getPackages();
    }

    public function show()
    {
        $template = file_get_contents(__DIR__ . '/../../templates/layout.html');

        $packagesTemplate = '';
        foreach ($this->platformPackages as $package) {
            $packagesTemplate .= "<tr><td>{$package->getPrettyName()}</td>";
            $packagesTemplate .= "<td>{$package->getPrettyVersion()}</td>";
            $packagesTemplate .= "<td>{$package->getDescription()}</td></tr>";
        }

        return str_replace('<!--packages//-->', $packagesTemplate, $template);
    }
}
