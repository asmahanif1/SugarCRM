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

$dictionary['pmse_BpmActivityDefinition'] = array(
    'table' => 'pmse_bpm_activity_definition',
    'archive' => false,
    'audited' => false,
    'activity_enabled' => false,
    'reassignable' => false,
    'duplicate_merge' => true,
    'fields' => array(
        'pro_id' => array(
            'required' => true,
            'name' => 'pro_id',
            'vname' => 'Process identifier',
            'type' => 'varchar',
            'massupdate' => false,
            'default' => '',
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'len' => '36',
            'size' => '36',
        ),
        'act_type' => array(
            'required' => true,
            'name' => 'act_type',
            'vname' => '',
            'type' => 'varchar',
            'massupdate' => false,
            'default' => 'TASK',
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'len' => '32',
            'size' => '32',
        ),
        'act_duration' => array(
            'required' => true,
            'name' => 'act_duration',
            'vname' => 'Estimated duration for this activity',
            'type' => 'int',
            'massupdate' => false,
            'default' => '0',
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'len' => '4',
            'size' => '20',
            'enable_range_search' => false,
            'disable_num_format' => '',
            'min' => false,
            'max' => false,
        ),
        'act_duration_unit' => array(
            'required' => true,
            'name' => 'act_duration_unit',
            'vname' => 'Time unit used in the Estimated duration for this activity',
            'type' => 'varchar',
            'massupdate' => false,
            'default' => 'DAYS',
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'len' => '32',
            'size' => '32',
        ),
        'act_send_notification' => array(
            'required' => true,
            'name' => 'act_send_notification',
            'vname' => 'Boolean value indicates if an email notification is send in each route',
            'type' => 'int',
            'massupdate' => false,
            'default' => '0',
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'len' => '4',
            'size' => '20',
            'enable_range_search' => false,
            'disable_num_format' => '',
            'min' => false,
            'max' => false,
        ),
        'act_assignment_method' => array(
            'required' => true,
            'name' => 'act_assignment_method',
            'vname' => 'Method used to assign user to this activity',
            'type' => 'varchar',
            'massupdate' => false,
            'default' => 'balanced',
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'len' => '32',
            'size' => '32',
        ),
        'act_assign_team' => array(
            'required' => true,
            'name' => 'act_assign_team',
            'vname' => 'if team will change with this script',
            'type' => 'varchar',
            'massupdate' => false,
            'default' => '',
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'len' => '40',
            'size' => '40',
        ),
        'act_assign_user' => array(
            'required' => true,
            'name' => 'act_assign_user',
            'vname' => 'if user will change with this script',
            'type' => 'varchar',
            'massupdate' => false,
            'default' => '',
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'len' => '40',
            'size' => '40',
        ),
        'act_value_based_assignment' => array(
            'required' => true,
            'name' => 'act_value_based_assignment',
            'vname' => 'Method used to assign user to this activity',
            'type' => 'varchar',
            'massupdate' => false,
            'default' => '',
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'len' => '255',
            'size' => '255',
        ),
        'act_reassign' => array(
            'required' => true,
            'name' => 'act_reassign',
            'vname' => 'Boolean value used to define adhoc assignment',
            'type' => 'int',
            'massupdate' => false,
            'default' => '0',
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'len' => '4',
            'size' => '20',
            'enable_range_search' => false,
            'disable_num_format' => '',
            'min' => false,
            'max' => false,
        ),
        'act_reassign_team' => array(
            'required' => true,
            'name' => 'act_reassign_team',
            'vname' => 'if team will change with this script',
            'type' => 'varchar',
            'massupdate' => false,
            'default' => '',
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'len' => '40',
            'size' => '40',
        ),
        'act_adhoc' => array(
            'required' => true,
            'name' => 'act_adhoc',
            'vname' => 'Boolean value used to define adhoc assignment',
            'type' => 'int',
            'massupdate' => false,
            'default' => '0',
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'len' => '4',
            'size' => '20',
            'enable_range_search' => false,
            'disable_num_format' => '',
            'min' => false,
            'max' => false,
        ),
        'act_adhoc_behavior' => array(
            'required' => true,
            'name' => 'act_adhoc_behavior',
            'vname' => 'Adhoc assignment behavior, can be one way or round trip',
            'type' => 'varchar',
            'massupdate' => false,
            'default' => '',
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'len' => '40',
            'size' => '40',
        ),
        'act_adhoc_team' => array(
            'required' => true,
            'name' => 'act_adhoc_team',
            'vname' => 'if team will change with this script',
            'type' => 'varchar',
            'massupdate' => false,
            'default' => '',
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'len' => '40',
            'size' => '40',
        ),
        'act_response_buttons' => array(
            'required' => true,
            'name' => 'act_response_buttons',
            'vname' => 'if team will change with this script',
            'type' => 'varchar',
            'massupdate' => false,
            'default' => '',
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'len' => '40',
            'size' => '40',
        ),
        'act_last_user_assigned' => array(
            'required' => true,
            'name' => 'act_last_user_assigned',
            'vname' => 'last User Identifier used in balanced assignment',
            'type' => 'varchar',
            'massupdate' => false,
            'default' => '',
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'len' => '40',
            'size' => '40',
        ),
        'act_field_module' => array(
            'required' => true,
            'name' => 'act_field_module',
            'vname' => 'Field Module',
            'type' => 'varchar',
            'massupdate' => false,
            'default' => '',
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'len' => '100',
            'size' => '100',
        ),
        'act_fields' => array(
            'required' => false,
            'name' => 'act_fields',
            'vname' => 'fields array to change',
            'type' => 'text',
            'massupdate' => false,
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'size' => '20',
            'rows' => '4',
            'cols' => '20',
        ),
        'act_params' => array(
            'required' => true,
            'name' => 'act_params',
            'vname' => 'some parameters',
            'type' => 'text',
            'massupdate' => false,
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'size' => '20',
            'rows' => '4',
            'cols' => '20',
        ),
        'act_readonly_fields' => array(
            'required' => false,
            'name' => 'act_readonly_fields',
            'vname' => 'fields array to change',
            'type' => 'text',
            'massupdate' => false,
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'size' => '20',
            'rows' => '4',
            'cols' => '20',
        ),
        'act_expected_time' => array(
            'required' => false,
            'name' => 'act_expected_time',
            'vname' => 'expected time to complete the task',
            'type' => 'text',
            'massupdate' => false,
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'size' => '20',
            'rows' => '4',
            'cols' => '20',
        ),
        'act_required_fields' => array(
            'required' => false,
            'name' => 'act_required_fields',
            'vname' => 'fields array to change',
            'type' => 'text',
            'massupdate' => false,
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'size' => '20',
            'rows' => '4',
            'cols' => '20',
        ),
        'act_related_modules' => array(
            'required' => false,
            'name' => 'act_related_modules',
            'vname' => 'fields array to change',
            'type' => 'text',
            'massupdate' => false,
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'size' => '20',
            'rows' => '4',
            'cols' => '20',
        ),
        'act_service_url' => array(
            'required' => false,
            'name' => 'act_service_url',
            'vname' => 'fields array to change',
            'type' => 'text',
            'massupdate' => false,
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'size' => '20',
            'rows' => '4',
            'cols' => '20',
        ),
        'act_service_params' => array(
            'required' => false,
            'name' => 'act_service_params',
            'vname' => 'fields array to change',
            'type' => 'text',
            'massupdate' => false,
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'size' => '20',
            'rows' => '4',
            'cols' => '20',
        ),
        'act_service_method' => array(
            'required' => false,
            'name' => 'act_service_method',
            'vname' => 'fields array to change',
            'type' => 'text',
            'massupdate' => false,
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'size' => '20',
            'rows' => '4',
            'cols' => '20',
        ),
        'act_update_record_owner' => array(
            'required' => false,
            'name' => 'act_update_record_owner',
            'vname' => 'fields array to change',
            'type' => 'int',
            'massupdate' => false,
            'default' => '0',
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'len' => '4',
            'size' => '1',
            'enable_range_search' => false,
            'disable_num_format' => '',
            'min' => false,
            'max' => false,
        ),
        'act_email_process_user' => [
            'required' => false,
            'name' => 'act_email_process_user',
            'vname' => 'email process user',
            'type' => 'bool',
            'default' => '0',
            'importable' => true,
            'duplicate_merge' => 'disabled',
            'dupblicate_merge_dom_value' => '0',
            'audited' => false,
            'unified_search' => false,
            'merge_filter' => 'disabled',
        ],
        'act_email_template_id' => [
            'required' => false,
            'name' => 'act_email_template_id',
            'vname' => 'id of email template used to notify user of process assignment',
            // Even though this is an ID field, email template IDs are stored in
            // pmse_BpmEventDefinition as a text field, so this is a text field
            // to ensure cross-compatibility between modules.
            'type' => 'text',
            'no_default' => true,
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'size' => '20',
            'rows' => '4',
            'cols' => '20',
        ],
        'act_set_by_avl' => array(
            'required' => false,
            'name' => 'act_set_by_avl',
            'vname' => 'assign by available',
            'type' => 'bool',
            'massupdate' => false,
            'default' => '0',
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
        ),
        'act_avl_count' => array(
            'required' => false,
            'name' => 'act_avl_count',
            'vname' => 'available time count',
            'type' => 'int',
            'massupdate' => false,
            'default' => '0',
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'len' => '4',
            'size' => '1',
            'enable_range_search' => false,
            'disable_num_format' => '',
            'min' => false,
            'max' => false,
        ),
        'act_avl_type' => array(
            'required' => false,
            'name' => 'act_avl_type',
            'vname' => 'available time type',
            'type' => 'varchar',
            'massupdate' => false,
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'len' => '40',
            'size' => '40',
        ),
        'act_avl_before_type' => array(
            'required' => false,
            'name' => 'act_avl_before_type',
            'vname' => 'available before field',
            'type' => 'varchar',
            'massupdate' => false,
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'len' => '40',
            'size' => '40',
        ),
        'act_reserve_user' => array(
            'required' => false,
            'name' => 'act_reserve_user',
            'vname' => 'id of reserve user',
            'type' => 'varchar',
            'massupdate' => false,
            'default' => '',
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'len' => '36',
            'size' => '36',
        ),
        'execution_mode' => array(
            'required' => true,
            'name' => 'execution_mode',
            'vname' => 'script to be executed',
            'type' => 'varchar',
            'massupdate' => false,
            'default' => 'DEFAULT',
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'len' => '10',
            'size' => '10',
        ),
    ),
    'relationships' => array(),
    'optimistic_locking' => true,
    'unified_search' => true,
    'ignore_templates' => array(
        'taggable',
        'lockable_fields',
        'commentlog',
    ),
    'portal_visibility' => [
        'class' => 'PMSE',
    ],
    'uses' => array(
        'basic',
        'assignable',
    ),
);

VardefManager::createVardef('pmse_BpmActivityDefinition', 'pmse_BpmActivityDefinition');
