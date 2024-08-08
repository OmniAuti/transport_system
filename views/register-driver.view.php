<?php
    view('partials/header.partial.php', ['title' => 'Register Driver']);
?>

    <h1>Driver Register</h1>
    <form action="/register-driver" method="POST">
        <div>
            <input placeholder="Email" type="email" name="register_email" id="">
        </div>
        <div>
            <input placeholder="Name" type="text" name="register_name" id="">
        </div>
        <div>
            <input placeholder="Password" type="password" name="register_password" id="">
        </div>
        <div>
            <input type="submit" value="Register">
        </div>
        <div>
            <?php if (isset($errors['email']))  echo $errors['email']; ?>
        </div>
    </form>
</body>
</html>