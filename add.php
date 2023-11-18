<?php
require "connection.php";

if  ($_SERVER["REQUEST_METHOD"] == "POST"){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $category = $_POST['category'];

    $sql = "INSERT INTO contact (firstName, lastName, email, password, catégorie) VALUES ('$firstname', '$lastname', '$email', '$pwd', '$category')";

    if (mysqli_query($conn, $sql)) {
        echo "Records added successfully.";
        header("location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
