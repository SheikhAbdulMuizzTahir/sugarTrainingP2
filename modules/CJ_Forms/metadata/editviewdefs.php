<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

$viewdefs['CJ_Forms']['EditView'] = [
    'templateMeta' => [
        'form' => [],
        'maxColumns' => '2',
        'widths' => [
            [
                'label' => '10',
                'field' => '30',
            ],
            [
                'label' => '10',
                'field' => '30',
            ],
        ],
        'includes' => [],
    ],
    'panels' => [
        'DEFAULT' => [
            [
                'name',
            ],
            [
                '',
                'team_name',
            ],
            [
                'description',
            ],
        ],
    ],
];
