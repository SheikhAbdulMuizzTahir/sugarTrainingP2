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
namespace Sugarcrm\Sugarcrm\Security\Subject;

use Sugarcrm\Sugarcrm\Security\Subject;

/**
 * Sugar Workflow subject
 */
final class Workflow extends Bean
{
    /**
     * {@inheritDoc}
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $parent = parent::jsonSerialize();
        $child = ['_type' => 'workflow'];
        return array_merge($parent, $child);
    }
}
