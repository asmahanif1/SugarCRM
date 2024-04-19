<?php
/*
$dependencies['Accounts']['readonly_fields'] = array(
    'hooks' => array("edit"),
    'trigger' => equal($current_user->is_admin, true),
    //Optional, the trigger for the dependency. Defaults to 'true'.
    //'triggerFields' => array('lock_record_c'),
    'onload' => true,
    //Actions is a list of actions to fire when the trigger is true
    // You could list multiple fields here each in their own array under 'actions'
    'actions' => array(
        array(
            'name' => 'ReadOnly',
            //The parameters passed in will depend on the action type set in 'name'
            'params' => array(
                'target' => 'name',
                'value' => 'true',
            ),
        ),
    ),
);

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

// Check if the current user is an admin
$current_user = \BeanFactory::getBean('Users', $GLOBALS['current_user']->id);
$is_admin = $current_user->is_admin;

$dependencies['Accounts']['readonly_fields'] = array();

// If the user is not an admin, make the name field readonly
if ($is_admin) {
    $dependencies['Accounts']['readonly_fields'] = array(
        'hooks' => array("edit"),
        'trigger' => 'true', // You may adjust the trigger condition based on your requirements
        'onload' => true, // Apply the readonly status onload
        'actions' => array(
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'name',
                    'value' => 'true', // Set the name field as readonly
                ),
            ),
        ),
    );
}

?>

*/



global $current_user;
$is_admin = $current_user->is_admin;
if (!$is_admin){
$dependencies['Accounts']['readonly_fields'] = array(
    'hooks' => array("edit"),
    'trigger' => 'true',
    //Optional, the trigger for the dependency. Defaults to 'true'.
    'triggerFields' => array('id'),
    'onload' => true,
    //Actions is a list of actions to fire when the trigger is true
    // You could list multiple fields here each in their own array under 'actions'
    'actions' => array(
        array(
            'name' => 'ReadOnly',
            //The parameters passed in will depend on the action type set in 'name'
            'params' => array(
                'target' => 'name',
                'value' => 'true',
            ),
        ),
    ),
);
}
