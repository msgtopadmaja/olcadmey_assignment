<?php
    // connection string
    $con = mysqli_connect("localhost", "root", "", "contact") or die($mysqli_error($con));
    session_start();
    // form data
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $your_email = $_POST['your_email'];
    $message = $_POST['message'];
    $your_query = $_POST['query'];
    // insert query
    $sql = "INSERT INTO `detail` (`first_name`, `last_name`, `your_email`, `message`, `query`) VALUES ('$first_name', '$last_name', '$your_email', '$message', '$your_query')";
    $result = mysqli_query($con, $sql) or die($mysqli_error($con));
    // display success page or error text
    if($result) {
        $file="./success.html";
        $file=file_get_contents($file);
        $file=str_replace("{{first_name}}", $first_name, $file);
        $file=str_replace("{{last_name}}", $last_name, $file);
        $file=str_replace("{{your_email}}", $your_email, $file);
        $file=str_replace("{{message}}", $message, $file);
        $file=str_replace("{{query}}", $your_query, $file);
        echo $file;
    } else {
        echo "Data Saving failed";
    }
?>