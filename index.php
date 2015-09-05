<?php

if($_POST["submit"]) {
    $recipient="justine@minerva.kgi.edu";
    $subject="Form to email message";
    $email=$_POST["email"];
    $secret=$_POST["secret"];

    $mailBody="Name: $email\nEmail: $email\n\n$secret";

    mail($recipient, $subject, $mailBody, "From: $sender <$email>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?><!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>Contact form to email</title>
</head>

<body>

    <?=$thankYou ?>

    <form method="post" action="contact.php">
        <label>Email:</label>
        <input name="email">

        <label>Secret:</label>
        <textarea rows="5" cols="20" name="secret"></textarea>

        <input type="submit" name="submit">
    </form>

</body>

</html>
