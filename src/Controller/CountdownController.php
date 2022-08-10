<?php

declare(strict_types=1);

/*
 * This file is part of agonyz/contao-countdown-bundle.
 *
 * (c) 2022 agonyz
 *
 * @license LGPL-3.0-or-later
 */

namespace Agonyz\ContaoCountdownBundle\Controller;

use Contao\ContentModel;
use Contao\CoreBundle\Controller\ContentElement\AbstractContentElementController;
use Contao\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CountdownController extends AbstractContentElementController
{
    public const TYPE = 'countdown';

    protected function getResponse(Template $template, ContentModel $model, Request $request): Response
    {
        if (!$model->countdown_use_stylesheet) {
            $GLOBALS['TL_HEAD'][] = Template::generateStyleTag('bundles/agonyzcontaocountdown/countdown.css');
        }

        if (!$model->countdown_use_javascript) {
            $GLOBALS['TL_BODY'][] = Template::generateScriptTag('bundles/agonyzcontaocountdown/countdown.js', false, null);
        }

        $unitsToDisplay = unserialize($model->countdown_checkbox_display);

        $template->showSeconds = isset($unitsToDisplay[0]);
        $template->showMinutes = isset($unitsToDisplay[1]);
        $template->showHours = isset($unitsToDisplay[2]);
        $template->showDays = isset($unitsToDisplay[3]);

        return $template->getResponse();
    }
}
