<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["nfrm"];
    $email = $_POST["efrm"];
    $message = $_POST["msg"];
    $subject = $_POST["sfrm"];

    $to = "palakverma2003@gmail.com";
    $headers = "From: $email\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Email could not be sent.";
    }
}
?>