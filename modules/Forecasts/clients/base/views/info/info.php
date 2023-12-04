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

$viewdefs['Forecasts']['base']['view']['info'] = array(
    'last_commit' => array(
        array(
            'name' => 'lastCommitDate',
            'type' => 'lastcommit',
            'datapoints' => array(
                'worst_case',
                'likely_case',
                'best_case'
            )
        )
    ),
    'commitlog' => array(
        array(
            'name' => 'commitLog',
            'type' => 'commitlog',
        )
    ),
    'datapoints' => array(
        array(
            'name' => 'worst_case',
            'label' => 'LBL_WORST',
            'type' => 'datapoint',
            'click_to_edit' => true,
        ),
        array(
            'name' => 'likely_case',
            'label' => 'LBL_LIKELY',
            'total_field' => 'forecasted_likely',
            'type' => 'datapoint',
            'click_to_edit' => true,
        ),
        array(
            'name' => 'best_case',
            'label' => 'LBL_BEST',
            'type' => 'datapoint',
            'click_to_edit' => true,
        )
    ),
);
