<?php

declare(strict_types=1);

/*
 * This file is part of agonyz/contao-countdown-bundle.
 *
 * (c) Frank Ficzak
 *
 * @license LGPL-3.0-or-later
 */

use Agonyz\ContaoCountdownBundle\Controller\CountdownController;

$GLOBALS['TL_LANG']['CTE'][CountdownController::TYPE] = [
    'Countdown',
    'Ein simples Countdown Element.',
];

$GLOBALS['TL_LANG']['tl_content']['countdown_date'] = [
    'Datum',
    'Wählen Sie das Datum bis zu dem der Countdown runterzählen soll',
];

$GLOBALS['TL_LANG']['tl_content']['countdown_checkbox_display'] = [
    'Einheiten',
    'Wählen Sie die Einheiten, welche im Countdown angezeigt werden sollen',
];

$GLOBALS['TL_LANG']['tl_content']['countdown_checkbox_display']['options'] = [
    1 => 'Sekunden',
    2 => 'Minuten',
    3 => 'Stunden',
    4 => 'Tage',
];

$GLOBALS['TL_LANG']['tl_content']['countdown_use_stylesheet'] = [
    'Eigenes Stylesheet verwenden',
    'Wenn Sie diese Option anhaken, wird das vordefinierte Stylesheet im Template nicht geladen',
];

$GLOBALS['TL_LANG']['tl_content']['countdown_use_javascript'] = [
    'Eigenes Javascript verwenden',
    'Wenn Sie diese Option anhaken, wird das vordefinierte Javascript im Template nicht geladen',
];

$GLOBALS['TL_LANG']['tl_content']['countdown_legend'] = 'Konfiguration';
