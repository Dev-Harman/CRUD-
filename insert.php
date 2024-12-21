<?php
@include("./connection.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = ($_POST['name']);
    $fname = ($_POST['fname']);
    $mname = ($_POST['mname']);
    $number = ($_POST['number']);
    $email = ($_POST['email']);
    $pass = ($_POST['pass']);

    // for image uploading this code will work
    if (isset($_FILES['image'])) {
        $image = $_FILES['image'];
        $imageName = $image['name']; // real name
        $imageTmpName = $image['tmp_name']; // fake name

        // my directry creation for store image
        $uploadDirectory = "./";
        $newImageName = basename($imageName);

        // Move the image to the uploads folder
        if (move_uploaded_file($imageTmpName, $uploadDirectory . $newImageName)) {

            $imagePath = $newImageName;
        } else {
            echo "Error.................";
        }
    }

    $sql = "INSERT INTO users (name, fname, mname, number, email, pass, image) VALUES ('$name','$fname','$mname','$number','$email','$pass', '$imagePath')";

    if (mysqli_query($conn, $sql)) {
        echo "DATA INSERTED SUCCESSFULLY..................";
    } else {
        echo "DATA NOT INSERTED...............";
    }
    mysqli_close($conn);
}