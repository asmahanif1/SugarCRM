<?php

$hook_version = 1;
// Register the logic hook



$hook_array['before_save'][] = array(
    // The order of execution (0 is the first to execute)
    1,
    // The hook type
    'Before save hook',
    // The PHP file where the class is defined
    'custom/modules/Accounts/custom_logic_hooks.php',
    // The class name
    'CustomLogicHooks',
    // The method to call in the class
    'beforeSave'
);