<?php
require_once "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $serialNumber = $_POST['serialNumber'];
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];

    // Check if a new image is uploaded
    if (!empty($_FILES["image"]["name"])) {
        $imageName = $_FILES["image"]["name"];
        $imagePath = "uploads/" . $imageName;

        if (move_uploaded_file($_FILES["image"]["tmp_name"], $imagePath)) {
            // Update user details with the new image
            $sql = "UPDATE userdata SET name='$name', contact='$contact', address='$address', imageName='$imageName', imagePath='$imagePath' WHERE serialNumber='$serialNumber'";

            if ($conn->query($sql) === true) {
                     // Redirect to a new page with user details
        header("Location: details.php?serialNumber=$serialNumber");
            }
        } else {
            echo "Error uploading the new image.";
        }
    } else {
        // Update user details without changing the image
        $sql = "UPDATE userdata SET name='$name', contact='$contact', address='$address' WHERE serialNumber='$serialNumber'";

        if ($conn->query($sql) === true) {
            
            // Redirect to a new page with user details
        header("Location: details.php?serialNumber=$serialNumber");
        exit;
    }
       
        else {
            echo "Error updating user details: " . $conn->error;
        }
    }
}

$conn->close();
?>
