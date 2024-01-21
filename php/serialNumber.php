<?php
require_once "connection.php";

function generateSerialNumber() {
    // Get current date and time
    $currentDate = new DateTime();

    // Generate a random string (you can customize the length as needed)
    $randomString = substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 6);

    // Extract date components
    $year = $currentDate->format('Y');
    $month = $currentDate->format('m');
    $day = $currentDate->format('d');
    $hours = $currentDate->format('H');
    $minutes = $currentDate->format('i');
    $seconds = $currentDate->format('s');


    
    // Get microseconds
    $microseconds = $currentDate->format('u');

    // Combine components to create a unique serial number
    return /*$serialNumber = */ "SN{$year}{$month}{$day}{$hours}{$minutes}{$seconds}{$microseconds}{$randomString}";

   
}

// Example usage
//$serialNumber = generateSerialNumber();
//echo $serialNumber;

?>
