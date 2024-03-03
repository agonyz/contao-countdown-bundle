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

        $template->showSeconds = in_array("1", $unitsToDisplay);
        $template->showMinutes = in_array("2", $unitsToDisplay);
        $template->showHours = in_array("3", $unitsToDisplay);
        $template->showDays = in_array("4", $unitsToDisplay);

        return $template->getResponse();
    }
}
