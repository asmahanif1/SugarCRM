<?php

array_push($job_strings, 'custom_new_job');
function custom_new_job()
{
        
    // Database connection parameters
    $servername = 'localhost'; // database server hostname
    $username = 'root'; // database username
    $password = 'root'; // database password
    $database = 'sugarcrm'; // SugarCRM database name
    
    $startOfYesterday = date('Y-m-d 00:00:00', strtotime('yesterday'));
    $endOfYesterday = date('Y-m-d 23:59:59', strtotime('yesterday'));
    $updateValue = 'updated on ' . date('Y-m-d', strtotime('yesterday')) . ' date';
    
    // Connect to the database
    $conn = mysqli_connect($servername, $username, $password, $database);
    
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    // SQL query to select updated rows in the Opportunities table
    $sql = "UPDATE opportunities SET my_text_field = '$updateValue' 
            WHERE date_modified >= '$startOfYesterday' 
            AND date_modified <= '$endOfYesterday' 
            AND date_entered != date_modified";

    
    // Execute SQL query
    if (mysqli_query($conn, $sql)) {
        echo "my_text_field updated successfully for records updated yesterday.\n";
    } else {
        echo "Error updating my_text_field: " . mysqli_error($conn);
    }
    
    // Close database connection
    mysqli_close($conn);
 

    return true;
}