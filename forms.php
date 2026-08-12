<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $email = filter_var($_POST['email'],
    FILTER_SANITIZE_EMAIL);
    echo "the email $email was submitted";
    die;
    }
?>

<html>
    <body>
        <h1>Please submit form</h1>
        <form action="POST">
            <label>Email:</label>
            <input type="email" name="email">
            <button>submit</button>
        </form>
    </body>
</html>