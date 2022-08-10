<?php

declare(strict_types=1);

/*
 * This file is part of agonyz/contao-countdown-bundle.
 *
 * (c) 2022 agonyz
 *
 * @license LGPL-3.0-or-later
 */

namespace Agonyz\ContaoCountdownBundle\ContaoManager;

use Agonyz\ContaoCountdownBundle\AgonyzContaoCountdownBundle;
use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(AgonyzContaoCountdownBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
