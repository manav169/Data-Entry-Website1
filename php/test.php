<?php phpinfo(); ?>
/*//upload photograph
    $targetDir = "/uploads";
    $targetFile = $targetDir . basename($_FILES["photograph"]["name"]);
    $uploadOk = 1;
    $imgFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["photograph"]["tmp_name"], $targetFile)) {
            echo "The file ". basename( $_FILES["photograph"]["name"]). " has been uploaded.";

            // Insert data into the database
            $sql = "INSERT INTO users (serialNumber, name, contact, address, photograph)
             VALUES ('$serialNumber', '$name', '$contact', '$address', '$targetFile')";
            if ($conn->query($sql) === TRUE) {
                // Redirect to a new page with user details
                header("Location: details.php?serialNumber=$serialNumber");
                exit();
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }

         */