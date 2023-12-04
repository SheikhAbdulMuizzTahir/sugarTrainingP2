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
$dictionary['DRI_Workflow'] = [
    'table' => 'dri_workflows',
    'audited' => true,
    'unified_search' => false,
    'icon' => 'sicon-customer-journey-lg',
    'duplicate_merge' => true,
    'comment' => 'DRI_Workflow',
    'optimistic_lock' => true,
    'uses' => [
        'default',
        'assignable',
        'team_security',
        'customer_journey_enabled_modules',
    ],
    'fields' => [
        'available_modules' => [
            'name' => 'available_modules',
            'vname' => 'LBL_AVAILABLE_MODULES',
            'required' => false,
            'reportable' => true,
            'audited' => true,
            'importable' => 'true',
            'massupdate' => false,
            'options' => 'dri_workflow_templates_available_modules_list',
            'type' => 'multienum',
            'isMultiSelect' => true,
        ],
        'enabled_modules' => [
            'name' => 'enabled_modules',
            'vname' => 'LBL_ENABLED_MODULES',
            'required' => false,
            'reportable' => true,
            'audited' => true,
            'importable' => 'true',
            'massupdate' => false,
            'options' => null,
            'type' => 'multienum',
            'isMultiSelect' => true,
            'source' => 'non-db',
            'function' => [
                'include' => 'modules/DRI_Workflows/DRI_Workflow.php',
                'name' => [
                    'DRI_Workflow',
                    'listEnabledModulesEnumOptions',
                ],
            ],
        ],
        'state' => [
            'name' => 'state',
            'vname' => 'LBL_STATE',
            'required' => true,
            'reportable' => true,
            'audited' => true,
            'importable' => 'true',
            'massupdate' => false,
            'options' => 'dri_workflows_state_list',
            'type' => 'enum',
            'default' => 'not_started',
            'readonly' => true,
        ],
        'assignee_rule' => [
            'name' => 'assignee_rule',
            'vname' => 'LBL_ASSIGNEE_RULE',
            'required' => true,
            'reportable' => true,
            'audited' => true,
            'importable' => 'true',
            'massupdate' => false,
            'options' => 'dri_workflow_templates_assignee_rule_list',
            'type' => 'enum',
            'default' => 'stage_start',
        ],
        'target_assignee' => [
            'name' => 'target_assignee',
            'vname' => 'LBL_TARGET_ASSIGNEE',
            'required' => true,
            'reportable' => true,
            'audited' => true,
            'importable' => 'true',
            'massupdate' => false,
            'options' => 'dri_workflow_templates_target_assignee_list',
            'type' => 'enum',
            'default' => 'current_user',
        ],
        'progress' => [
            'name' => 'progress',
            'vname' => 'LBL_PROGRESS',
            'required' => false,
            'reportable' => true,
            'audited' => true,
            'importable' => 'true',
            'massupdate' => false,
            'type' => 'float',
            'options' => 'numeric_range_search_dom',
            'enable_range_search' => true,
            'default' => 0,
            'readonly' => true,
            'validation' => [
                'type' => 'range',
                'min' => 0,
                'max' => 100,
            ],
        ],
        'momentum_ratio' => [
            'name' => 'momentum_ratio',
            'vname' => 'LBL_MOMENTUM_RATIO',
            'required' => false,
            'reportable' => true,
            'audited' => true,
            'importable' => 'true',
            'massupdate' => false,
            'type' => 'float',
            'options' => 'numeric_range_search_dom',
            'enable_range_search' => true,
            'default' => 1,
            'readonly' => true,
            'validation' => [
                'type' => 'range',
                'min' => 0,
                'max' => 100,
            ],
        ],
        'score' => [
            'name' => 'score',
            'vname' => 'LBL_SCORE',
            'required' => false,
            'reportable' => true,
            'audited' => true,
            'importable' => 'true',
            'massupdate' => false,
            'type' => 'int',
            'len' => 8,
            'options' => 'numeric_range_search_dom',
            'enable_range_search' => true,
            'readonly' => true,
            'disable_num_format' => true,
        ],
        'points' => [
            'name' => 'points',
            'vname' => 'LBL_POINTS',
            'required' => false,
            'reportable' => true,
            'audited' => true,
            'importable' => 'true',
            'massupdate' => false,
            'type' => 'int',
            'len' => 8,
            'options' => 'numeric_range_search_dom',
            'enable_range_search' => true,
            'readonly' => true,
            'disable_num_format' => true,
        ],
        'momentum_points' => [
            'name' => 'momentum_points',
            'vname' => 'LBL_MOMENTUM_POINTS',
            'required' => false,
            'reportable' => true,
            'audited' => true,
            'importable' => 'true',
            'massupdate' => false,
            'type' => 'int',
            'len' => 8,
            'options' => 'numeric_range_search_dom',
            'enable_range_search' => true,
            'default' => 0,
            'readonly' => true,
            'disable_num_format' => true,
        ],
        'momentum_score' => [
            'name' => 'momentum_score',
            'vname' => 'LBL_MOMENTUM_SCORE',
            'required' => false,
            'reportable' => true,
            'audited' => true,
            'importable' => 'true',
            'massupdate' => false,
            'type' => 'int',
            'len' => 8,
            'options' => 'numeric_range_search_dom',
            'enable_range_search' => true,
            'default' => 0,
            'readonly' => true,
            'disable_num_format' => true,
        ],
        'date_started' => [
            'name' => 'date_started',
            'vname' => 'LBL_DATE_STARTED',
            'required' => false,
            'reportable' => true,
            'audited' => true,
            'importable' => 'true',
            'massupdate' => false,
            'type' => 'datetime',
            'readonly' => true,
        ],
        'date_completed' => [
            'name' => 'date_completed',
            'vname' => 'LBL_DATE_COMPLETED',
            'required' => false,
            'reportable' => true,
            'audited' => true,
            'importable' => 'true',
            'massupdate' => false,
            'type' => 'datetime',
            'readonly' => true,
        ],
        'archived' => [
            'name' => 'archived',
            'vname' => 'LBL_ARCHIVED',
            'required' => false,
            'reportable' => true,
            'audited' => true,
            'importable' => 'true',
            'massupdate' => false,
            'type' => 'bool',
            'default' => '0',
        ],
        'is_cancelled' => [
            'name' => 'is_cancelled',
            'vname' => 'LBL_IS_CANCELLED',
            'required' => false,
            'reportable' => true,
            'audited' => true,
            'importable' => 'true',
            'massupdate' => false,
            'type' => 'bool',
            'default' => '0',
        ],
        'is_deleted' => [
            'name' => 'is_deleted',
            'vname' => 'LBL_IS_DELETED',
            'required' => false,
            'reportable' => true,
            'audited' => true,
            'importable' => 'true',
            'massupdate' => false,
            'type' => 'bool',
            'default' => '0',
        ],
        'tasks' => [
            'name' => 'tasks',
            'vname' => 'LBL_TASKS',
            'source' => 'non-db',
            'type' => 'link',
            'side' => 'left',
            'bean_name' => 'Task',
            'relationship' => 'task_dri_workflows',
            'module' => 'Tasks',
        ],
        'calls' => [
            'name' => 'calls',
            'vname' => 'LBL_CALLS',
            'source' => 'non-db',
            'type' => 'link',
            'side' => 'left',
            'bean_name' => 'Call',
            'relationship' => 'call_dri_workflows',
            'module' => 'Calls',
        ],
        'meetings' => [
            'name' => 'meetings',
            'vname' => 'LBL_MEETINGS',
            'source' => 'non-db',
            'type' => 'link',
            'side' => 'left',
            'bean_name' => 'Meeting',
            'relationship' => 'meeting_dri_workflows',
            'module' => 'Meetings',
        ],
        'dri_subworkflows' => [
            'name' => 'dri_subworkflows',
            'vname' => 'LBL_DRI_SUBWORKFLOWS',
            'source' => 'non-db',
            'type' => 'link',
            'side' => 'left',
            'bean_name' => 'DRI_SubWorkflow',
            'relationship' => 'dri_subworkflow_dri_workflows',
            'module' => 'DRI_SubWorkflows',
        ],
        'current_stage_id' => [
            'name' => 'current_stage_id',
            'vname' => 'LBL_CURRENT_STAGE',
            'required' => false,
            'reportable' => false,
            'audited' => true,
            'importable' => 'true',
            'massupdate' => false,
            'type' => 'id',
        ],
        'current_stage_name' => [
            'name' => 'current_stage_name',
            'vname' => 'LBL_CURRENT_STAGE',
            'required' => false,
            'reportable' => false,
            'audited' => true,
            'importable' => 'true',
            'massupdate' => false,
            'source' => 'non-db',
            'type' => 'relate',
            'rname' => 'name',
            'table' => 'dri_subworkflows',
            'id_name' => 'current_stage_id',
            'sort_on' => 'name',
            'module' => 'DRI_SubWorkflows',
            'readonly' => true,
            'link' => 'current_stage_link',
        ],
        'current_stage_link' => [
            'name' => 'current_stage_link',
            'vname' => 'LBL_CURRENT_STAGE',
            'source' => 'non-db',
            'type' => 'link',
            'side' => 'right',
            'bean_name' => 'DRI_SubWorkflow',
            'relationship' => 'dri_workflow_current_stage_dri_subworkflows',
            'module' => 'DRI_SubWorkflows',
        ],
        'dri_workflow_template_id' => [
            'name' => 'dri_workflow_template_id',
            'vname' => 'LBL_DRI_WORKFLOW_TEMPLATE',
            'required' => false,
            'reportable' => false,
            'audited' => true,
            'importable' => 'true',
            'massupdate' => false,
            'type' => 'id',
        ],
        'dri_workflow_template_name' => [
            'name' => 'dri_workflow_template_name',
            'vname' => 'LBL_DRI_WORKFLOW_TEMPLATE',
            'required' => true,
            'reportable' => false,
            'audited' => true,
            'importable' => 'true',
            'massupdate' => false,
            'source' => 'non-db',
            'type' => 'relate',
            'rname' => 'name',
            'table' => 'dri_workflow_templates',
            'id_name' => 'dri_workflow_template_id',
            'sort_on' => 'name',
            'module' => 'DRI_Workflow_Templates',
            'link' => 'dri_workflow_template_link',
        ],
        'dri_workflow_template_link' => [
            'name' => 'dri_workflow_template_link',
            'vname' => 'LBL_DRI_WORKFLOW_TEMPLATE',
            'source' => 'non-db',
            'type' => 'link',
            'side' => 'right',
            'bean_name' => 'DRI_Workflow_Template',
            'relationship' => 'dri_workflow_dri_workflow_templates',
            'module' => 'DRI_Workflow_Templates',
        ],

        'parent_id' => [
            'name' => 'parent_id',
            'vname' => 'LBL_PARENT_ID',
            'required' => false,
            'reportable' => false,
            'audited' => true,
            'importable' => 'true',
            'massupdate' => false,
            'type' => 'id',
            'readonly' => true,
        ],
        'parent_name' => [
            'name' => 'parent_name',
            'vname' => 'LBL_PARENT_NAME',
            'required' => false,
            'reportable' => false,
            'audited' => true,
            'importable' => 'true',
            'massupdate' => false,
            'type' => 'parent',
            'len' => 255,
            'source' => 'non-db',
            'options' => 'dri_workflows_parent_type_list',
            'parent_type' => 'dri_workflows_parent_type_list',
            'readonly' => true,
            'id_name' => 'parent_id',
            'type_name' => 'parent_type',
        ],
        'parent_type' => [
            'name' => 'parent_type',
            'vname' => 'LBL_PARENT_TYPE',
            'required' => false,
            'reportable' => true,
            'audited' => true,
            'importable' => 'true',
            'massupdate' => false,
            'type' => 'parent_type',
            'len' => 255,
            'dbType' => 'varchar',
            'options' => 'dri_workflows_parent_type_list',
            'parent_type' => 'dri_workflows_parent_type_list',
            'readonly' => true,
        ],
    ],
    'relationships' => [
        'dri_workflow_current_stage_dri_subworkflows' => [
            'relationship_type' => 'one-to-many',
            'lhs_key' => 'id',
            'lhs_module' => 'DRI_SubWorkflows',
            'lhs_table' => 'dri_subworkflows',
            'rhs_module' => 'DRI_Workflows',
            'rhs_table' => 'dri_workflows',
            'rhs_key' => 'current_stage_id',
        ],
        'dri_workflow_dri_workflow_templates' => [
            'relationship_type' => 'one-to-many',
            'lhs_key' => 'id',
            'lhs_module' => 'DRI_Workflow_Templates',
            'lhs_table' => 'dri_workflow_templates',
            'rhs_module' => 'DRI_Workflows',
            'rhs_table' => 'dri_workflows',
            'rhs_key' => 'dri_workflow_template_id',
        ],
    ],
    'indices' => [
        'idx_cj_jry_current_stage_id' => [
            'name' => 'idx_cj_jry_current_stage_id',
            'type' => 'index',
            'fields' => [
                'current_stage_id',
            ],
        ],
        'idx_cj_journey_tpl_id' => [
            'name' => 'idx_cj_journey_tpl_id',
            'type' => 'index',
            'fields' => [
                'dri_workflow_template_id',
            ],
        ],
        'idx_cj_jry_parent_id' => [
            'name' => 'idx_cj_jry_parent_id',
            'type' => 'index',
            'fields' => [
                'parent_id',
            ],
        ],
    ],
    'duplicate_check' => [
        'enabled' => false,
    ],
    'acls' => [
        'SugarACLCustomerJourney' => true,
    ],
];

VardefManager::createVardef(
    'DRI_Workflows',
    'DRI_Workflow'
);
$dictionary['DRI_Workflow']['fields']['name']['readonly'] = true;

$dictionary['DRI_Workflow']['fields']['description']['readonly'] = true;
$dictionary['DRI_Workflow']['fields']['description']['full_text_search'] = [
  'enabled' => false,
];
