<?php

namespace RogerioPradoJ;

use Composer\Repository\PlatformRepository;

class PlatformShow
{
    public static function show()
    {
        $template = file_get_contents(__DIR__ . '/../../templates/layout.html');

        $composerPlatformRepo = new PlatformRepository;
        $platformPackages = $composerPlatformRepo->getPackages();

        $packagesTemplate = '';
        foreach ($platformPackages as $package) {
            $packagesTemplate .= "<tr><td>{$package->getPrettyName()}</td>";
            $packagesTemplate .= "<td>{$package->getPrettyVersion()}</td>";
            $packagesTemplate .= "<td>{$package->getDescription()}</td></tr>";
        }

        return str_replace('<!--packages//-->', $packagesTemplate, $template);
    }
}
