<?php
require_once "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <link rel="stylesheet" type="text/css" href="../styles/details.css">
</head>
<body><div class="container">

    <?php
//To check if serial  number is obtained
if(isset($_GET['serialNumber'])){

    //Get the serial number from URL
    $serialNumber = $_GET['serialNumber'];

    //Query to retrieve user details based on the serial number
    $sql = "SELECT * FROM userdata WHERE serialNumber='$serialNumber'";
    $result = $conn->query($sql);

    //Check if the query was successfull
    if($result && $result->num_rows > 0){
        //Fetch user details
        $user = $result->fetch_assoc();


        //Display user details
        echo "<h1>User Details</h1>";
        echo "<img src='" . htmlspecialchars($user['imagePath'], ENT_QUOTES, 'UTF-8') . "' alt=
        'user image' style='width: 300px; height: auto;'>";

        echo"<p><strong>Serial Number : </strong>" . $user['serialNumber'] . "</p>";
        echo "<p><strong>Name : </strong>" . $user['name'] . "</p>";
        echo "<p><strong>Contact : </strong>" . $user['contact'] . "</p>";
        echo "<p><strong>Address : </strong>" . $user['address'] . "</p>";
        
        echo "<a href='updateForm.php?serialNumber={$user['serialNumber']}'>Update</a>";
        echo "<a href='save.php'>Save</a>";
        
            }

   //echo $sql;
}
?><div>
</body>
</html>