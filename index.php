<?php
if (isset($_POST['name']) && isset($_POST['email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $to = 'tkudupudi2@gmail.com';
    $subject = "Hello It works";
    $body = '<html>
                <body>
                    <h2> Feedback - example.com </h2>
                    <hr>
                    <p>Name: <br>'.$name.'</p>
                    <p>Email:<br>'.$email.'</p>
                </body>
            </html>';
    //headers
    $headers = "From: ".$name." <".$email.">\r\n";
    $headers .= "Resply-To: ".$email."\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type : text/html; charset=utf-8";
    // send
    $send = mail($to, $subject, $body, $headers);
    if ($send) {
        echo '<br>';
        echo 'Thanks for contacting me. I will be with you shortly.';
    } else {
        echo 'error';
    }
}
?>

<!doctype html>
<html>
    <head>
        <title>Contact Me</title>
        <meta charset = "utf-8">
    </head>
    <body>
        <form action ="" method = "post">
            <input type = "text" name = "name" placeholder = "Your Name"><br>
            <input type = "text" name = "email" placeholder = "Your Email"><br>
            <button type = "submit">Subscribe</button>
        </form>
    </body>
</html>