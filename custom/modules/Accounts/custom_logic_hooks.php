<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

class CustomLogicHooks
{
   
    public function beforeSave( $bean, $event, $arguments)
    {
        //$GLOBALS['log']->fatal("beforeSave");
        //$GLOBALS['log']->fatal( $bean->fetched_row['account_type']);
       

        // Check if the saved bean type is "customer"
        if($bean->account_type === 'Customer'){
            //check if its a new instance
            if ($bean->fetched_row == false){
                $task = BeanFactory::newBean('Tasks');
                $task->name = 'New Task for Customer';
                $task->description = 'New task for the customer account: ' . $bean->name;
                $task->status = 'Not Started';
                $task->priority = 'Medium';
                // Relate the Task to the Account
                $task->parent_id = $bean->id;
                $task->parent_type = 'Accounts';
                // Save the Task record
                $task->save();
            }
            //else check if it is not already customer - account type is changed to customer
            else if($bean->fetched_row['account_type']!='Customer'){
                $task = BeanFactory::newBean('Tasks');
                $task->name = 'Follow-up Task for Customer';
                $task->description = 'Follow-up task for the customer account: ' . $bean->name;
                $task->status = 'Not Started';
                $task->priority = 'Medium';
                // Relate the Task to the Account
                $task->parent_id = $bean->id;
                $task->parent_type = 'Accounts';
                // Save the Task record
                $task->save();
            }
            
        }
    
    }
}



?>
