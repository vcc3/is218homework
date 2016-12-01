<?php
 // tkaing inpput from post in form.php
    if (isset($_POST['Submit'])) {
 //sanitizing name
        if ($_POST['name'] != "") {
            $_POST['name'] = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
            if ($_POST['name'] == "") {
                $errors .= 'Please enter a valid name.<br/><br/>';
            }
        } else {
            $errors .= 'Please enter your name.<br/>';
        }
//santizing email making sure its valid too
        if ($_POST['email'] != "") {
            $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors .= "$email is <strong>NOT</strong> a valid email address.<br/><br/>";
            }
        } else {
            $errors .= 'Please enter your email address.<br/>';
        }
 
      //string santizing from html elements 
 
        if ($_POST['message'] != "") {
            $_POST['message'] = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
            if ($_POST['message'] == "") {
                $errors .= 'Please enter a message to send.<br/>';
            }
        } else {
            $errors .= 'Please enter a message to send.<br/>';
        }
 //error messages
        if (!$errors) {
            $mail_to = 'me@somewhere.com';
            $subject = 'New Mail from Form Submission';
            $message  = 'From: ' . $_POST['name'] . "\n";
            $message .= 'Email: ' . $_POST['email'] . "\n";
            $message .= "Message:\n" . $_POST['message'] . "\n\n";
            mail($to, $subject, $message);
 
            echo "Thank you for your email!<br/><br/>";
        } else {
            echo '<div style="color: red">' . $errors . '<br/></div>';
        }
    }
?>