<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User Details</title>
    <link rel="stylesheet" type="text/css" href="../styles/updateForm.css">
</head>
<body>

<?php
require_once "connection.php";

if(isset($_GET['serialNumber'])){
    $serialNumber = $_GET['serialNumber'];
    $sql = "SELECT * FROM userdata WHERE serialNumber='$serialNumber'";
    $result = $conn->query($sql);

    if($result && $result->num_rows > 0){
        $user = $result->fetch_assoc();
?>
        <h1>Update User Details: </h1>
        <form action="updateProcess.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="serialNumber" value="<?php echo $user['serialNumber']; ?>">
            
            <label for="name">Name:</label>
            <input type="text" name="name" value="<?php echo $user['name']; ?>" required>
            
            <label for="contact">Contact:</label>
            <input type="text" name="contact" value="<?php echo $user['contact']; ?>" required>
            
            <label for="address">Address:</label>
            <input type="text" name="address" value="<?php echo $user['address']; ?>" required>
            
            <label for="image">Choose New Image:</label>
            <input type="file" name="image" accept="image/*">
            
            <input type="submit" value="Update">
        </form>
<?php
    }
}
?>
</body>
</html>
