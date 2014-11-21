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
        $loader = new \Twig_Loader_Filesystem('templates');
        $twig = new \Twig_Environment($loader, array('debug' => true));

        return $twig->render('layout.html.twig', array('packages' => $this->platformPackages));
    }
}
