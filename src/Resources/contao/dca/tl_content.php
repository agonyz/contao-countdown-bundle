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

$GLOBALS['TL_DCA']['tl_content']['palettes'][CountdownController::TYPE] =
    '{type_legend},type;{countdown_legend},headline,countdown_date,countdown_checkbox_display,countdown_use_stylesheet,countdown_use_javascript;{template_legend:hide},customTpl;';

$GLOBALS['TL_DCA']['tl_content']['fields']['countdown_date'] = [
    'exclude' => true,
    'inputType' => 'text',
    'eval' => ['rgxp' => 'datim', 'datepicker' => true, 'tl_class' => 'w50 wizard', 'mandatory' => true],
    'sql' => "varchar(10) COLLATE ascii_bin NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_content']['fields']['countdown_checkbox_display'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['countdown_checkbox_display'],
    'default' => [1, 2, 3, 4],
    'inputType' => 'checkbox',
    'options' => &$GLOBALS['TL_LANG']['tl_content']['countdown_checkbox_display']['options'],
    'eval' => ['multiple' => true, 'tl_class' => 'w50 clr'],
    'sql' => "varchar(255) NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_content']['fields']['countdown_use_stylesheet'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['countdown_use_stylesheet'],
    'default' => false,
    'inputType' => 'checkbox',
    'eval' => ['tl_class' => 'w50'],
    'sql' => ['type' => 'string', 'length' => 1, 'fixed' => true, 'default' => ''],
];

$GLOBALS['TL_DCA']['tl_content']['fields']['countdown_use_javascript'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['countdown_use_javascript'],
    'default' => false,
    'inputType' => 'checkbox',
    'eval' => ['tl_class' => 'w50'],
    'sql' => ['type' => 'string', 'length' => 1, 'fixed' => true, 'default' => ''],
];
