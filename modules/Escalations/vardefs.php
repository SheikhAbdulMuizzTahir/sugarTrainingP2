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

$dictionary['Escalation'] = [
    'table' => 'escalations',
    'color' => 'red',
    'icon' => 'sicon-escalation-lg',
    'audited' => true,
    'unified_search' => true,
    'full_text_search' => true,
    'unified_search_default_enabled' => true,
    'duplicate_merge' => true,
    'fields' => [
        'escalation_number' => [
            'name' =>  'escalation_number',
            'vname' => 'LBL_NUMBER',
            'type' => 'int',
            'readonly' => true,
            'len' => 11,
            'required' => true,
            'auto_increment' => true,
            'unified_search' => true,
            'full_text_search' => ['enabled' => true, 'searchable' => true,  'boost' => 1.25],
            'comment' => 'Visual unique identifier',
            'duplicate_merge' => 'disabled',
            'disable_num_format' => true,
            'studio' => ['quickcreate' => false],
            'duplicate_on_record_copy' => 'no',
        ],
        'status' => [
            'name' => 'status',
            'vname' => 'LBL_STATUS',
            'type' => 'enum',
            'options' => 'escalation_status_dom',
            'len' => 100,
            'audited' => true,
            'reportable' => true,
            'comment' => 'The status of the escalation',
            'merge_filter' => 'enabled',
            'sortable' => true,
            'duplicate_on_record_copy' => 'always',
            'full_text_search' => [
                'enabled' => true,
                'searchable' => false,
            ],
        ],
        'reason' => [
            'name' => 'reason',
            'vname' => 'LBL_REASON',
            'type' => 'enum',
            'options' => 'escalation_reason_dom',
            'len' => 100,
            'audited' => true,
            'reportable' => true,
            'comment' => 'The reason given for the escalation',
            'merge_filter' => 'enabled',
            'sortable' => true,
            'duplicate_on_record_copy' => 'always',
            'full_text_search' => [
                'enabled' => true,
                'searchable' => false,
            ],
        ],
        'source' => [
            'name' => 'source',
            'vname' => 'LBL_SOURCE',
            'type' => 'enum',
            'options' => 'escalation_source_dom',
            'len' => 100,
            'audited' => true,
            'reportable' => true,
            'comment' => 'The source of the escalation',
            'merge_filter' => 'enabled',
            'sortable' => true,
            'duplicate_on_record_copy' => 'always',
            'full_text_search' => [
                'enabled' => true,
                'searchable' => false,
            ],
        ],
        // Relate To field metadata
        'parent_type' => [
            'name'=>'parent_type',
            'vname' => 'LBL_RELATED_TYPE',
            'type' => 'parent_type',
            'dbType'=>'varchar',
            'required'=>true,
            'group'=>'parent_name',
            'options'=> 'parent_type_display_escalations',
            'len'=>255,
            'studio' => ['wirelesslistview'=>false],
            'comment' => 'The Sugar object to which the call is related',
            'readonly' => true,
        ],
        'parent_name' => [
            'name'=> 'parent_name',
            'parent_type'=>'record_type_display' ,
            'type_name'=>'parent_type',
            'id_name'=>'parent_id',
            'vname'=>'LBL_LIST_RELATED_TO',
            'type'=>'parent',
            'group'=>'parent_name',
            'source'=>'non-db',
            'options'=> 'parent_type_display_escalations',
            'studio' => true,
            'reportable' => true,
            'required' => true,
        ],
        'parent_id' => [
            'name'=>'parent_id',
            'vname'=>'LBL_LIST_RELATED_TO_ID',
            'type'=>'id',
            'group'=>'parent_name',
            'reportable'=>false,
            'massupdate' => false,
            'comment' => 'The ID of the parent Sugar object identified by parent_type',
        ],
        // End relate to field metadata
        'calls' => [
            'name' => 'calls',
            'type' => 'link',
            'relationship' => 'escalation_calls',
            'source' => 'non-db',
            'vname' => 'LBL_CALLS',
        ],
        'emails' => [
            'name' => 'emails',
            'type' => 'link',
            'relationship' => 'emails_escalations_rel',
            'source' => 'non-db',
            'unified_search' => true,
            'vname' => 'LBL_EMAILS',
        ],
        'archived_emails' => [
            'name' => 'archived_emails',
            'type' => 'link',
            'link_class' => 'ArchivedEmailsBeanLink',
            'link' => 'contacts',
            'source' => 'non-db',
            'vname' => 'LBL_EMAILS',
            'module' => 'Emails',
            'link_type' => 'many',
            'relationship' => '',
            'hideacl' => true,
            'readonly' => true,
        ],
        'contacts' => [
            'name' => 'contacts',
            'type' => 'link',
            'relationship' => 'contacts_escalations',
            'source' => 'non-db',
            'vname' => 'LBL_CONTACTS',
        ],
        'messages' => [
            'name' => 'messages',
            'type' => 'link',
            'relationship' => 'escalation_messages',
            'source' => 'non-db',
            'vname' => 'LBL_MESSAGES',
        ],
        'meetings' => [
            'name' => 'meetings',
            'type' => 'link',
            'relationship' => 'escalation_meetings',
            'bean_name' => 'Meeting',
            'source' => 'non-db',
            'vname' => 'LBL_MEETINGS',
        ],
        'notes' => [
            'name' => 'notes',
            'type' => 'link',
            'relationship' => 'escalation_notes',
            'source' => 'non-db',
            'vname' => 'LBL_NOTES',
        ],
        'tasks' => [
            'name' => 'tasks',
            'type' => 'link',
            'relationship' => 'escalation_tasks',
            'source' => 'non-db',
            'vname' => 'LBL_TASKS',
        ],
        'documents' => [
            'name' => 'documents',
            'type' => 'link',
            'relationship' => 'documents_escalations',
            'source' => 'non-db',
            'vname' => 'LBL_DOCUMENTS_SUBPANEL_TITLE',
        ],
        'accounts' => [
            'name' => 'accounts',
            'type' => 'link',
            'relationship' => 'accounts_escalations',
            'source' => 'non-db',
            'vname' => 'LBL_ACCOUNTS_SUBPANEL_TITLE',
        ],
    ],
    'indices' => [
        'number' => [
            'name' => 'escalationnumk',
            'type' =>'unique',
            'fields' => [
                'escalation_number',
            ],
        ],
        [
            'name' => 'idx_parent_escalation',
            'type' => 'index',
            'fields' => [
                'parent_id',
                'parent_type',
            ],
        ],
    ],
    'relationships' => [
        'escalation_calls' => [
            'lhs_module' => 'Escalations',
            'lhs_table' => 'escalations',
            'lhs_key' => 'id',
            'rhs_module' => 'Calls',
            'rhs_table' => 'calls',
            'rhs_key' => 'parent_id',
            'relationship_type' => 'one-to-many',
            'relationship_role_column' => 'parent_type',
            'relationship_role_column_value' => 'Escalations',
        ],
        'escalation_messages' => [
            'lhs_module' => 'Escalations',
            'lhs_table' => 'escalations',
            'lhs_key' => 'id',
            'rhs_module' => 'Messages',
            'rhs_table' => 'messages',
            'rhs_key' => 'parent_id',
            'relationship_type' => 'one-to-many',
            'relationship_role_column' => 'parent_type',
            'relationship_role_column_value' => 'Escalations',
        ],
        'escalation_meetings' => [
            'lhs_module' => 'Escalations',
            'lhs_table' => 'escalations',
            'lhs_key' => 'id',
            'rhs_module' => 'Meetings',
            'rhs_table' => 'meetings',
            'rhs_key' => 'parent_id',
            'relationship_type' => 'one-to-many',
            'relationship_role_column' => 'parent_type',
            'relationship_role_column_value' => 'Escalations',
        ],
        'escalation_notes' => [
            'lhs_module' => 'Escalations',
            'lhs_table' => 'escalations',
            'lhs_key' => 'id',
            'rhs_module' => 'Notes',
            'rhs_table' => 'notes',
            'rhs_key' => 'parent_id',
            'relationship_type' => 'one-to-many',
            'relationship_role_column' => 'parent_type',
            'relationship_role_column_value' => 'Escalations',
        ],
        'escalation_tasks' => [
            'lhs_module' => 'Escalations',
            'lhs_table' => 'escalations',
            'lhs_key' => 'id',
            'rhs_module' => 'Tasks',
            'rhs_table' => 'tasks',
            'rhs_key' => 'parent_id',
            'relationship_type' => 'one-to-many',
            'relationship_role_column' => 'parent_type',
            'relationship_role_column_value' => 'Escalations',
        ],
    ],
    'uses' => [
        'default',
        'team_security',
        'assignable',
        'audit',
    ],
];

VardefManager::createVardef('Escalations', 'Escalation');

$dictionary['Escalation']['fields']['name']['vname'] = 'LBL_SUBJECT';
$dictionary['Escalation']['fields']['name']['massupdate'] = true;