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



$moduleName = 'pmse_Project';
$viewdefs[$moduleName]['base']['menu']['header'] = array(
    array(
        'route' => "#$moduleName/create",
        'label' => 'LNK_NEW_PMSE_PROJECT',
        'acl_action' => 'create',
        'acl_module' => $moduleName,
        'icon' => 'sicon-plus',
    ),
    array(
        'route' => "#$moduleName",
        'label' => 'LNK_LIST',
        'acl_action' => 'list',
        'acl_module' => $moduleName,
        'icon' => 'sicon-list-view',
    ),
    array(
        'route'=>'#'.$moduleName.'/layout/project-import',
        'label' =>'LNK_IMPORT_PMSE_PROJECT',
        'acl_action'=>'import',
        'acl_module'=>$moduleName,
        'icon' => 'sicon-upload',
    ),
);
