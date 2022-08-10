<?php

declare(strict_types=1);

/*
 * This file is part of agonyz/contao-countdown-bundle.
 *
 * (c) 2022 agonyz
 *
 * @license LGPL-3.0-or-later
 */

use Agonyz\ContaoCountdownBundle\Controller\CountdownController;

$GLOBALS['TL_LANG']['CTE'][CountdownController::TYPE] = [
    'Countdown',
    'A simple countdown content element',
];

$GLOBALS['TL_LANG']['tl_content']['countdown_date'] = [
    'Date',
    'Pick the destination date',
];

$GLOBALS['TL_LANG']['tl_content']['countdown_checkbox_display'] = [
    'Units',
    'Pick the units you want to display',
];

$GLOBALS['TL_LANG']['tl_content']['countdown_checkbox_display']['options'] = [
    1 => 'seconds',
    2 => 'minutes',
    3 => 'hours',
    4 => 'days',
];

$GLOBALS['TL_LANG']['tl_content']['countdown_use_stylesheet'] = [
    'Use own stylesheet',
    'If you check this option, the predefined stylesheet in the template will not be loaded',
];

$GLOBALS['TL_LANG']['tl_content']['countdown_use_javascript'] = [
    'Use own javascript',
    'If you check this option, the predefined javascript in the template will not be loaded',
];

$GLOBALS['TL_LANG']['tl_content']['countdown_legend'] = 'Configuration';
