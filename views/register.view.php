<?php
    view('partials/header.partial.php', ['title' => 'Register']);
?>

    <h1>Register</h1>
    <form action="/register" method="POST">
        <div>
            <input placeholder="Email" type="email" name="register_email" id="">
        </div>
        <div>
            <input placeholder="Username" type="text" name="register_username" id="">
        </div>
        <div>
            <input placeholder="Password" type="password" name="register_password" id="">
        </div>
        <div>
            <input type="submit" value="Register">
        </div>
        <div>
            <?php if (isset($errors['email']))  echo $errors['email']; ?>
            <?php if (isset($errors['username']))  echo $errors['username']; ?>
        </div>
    </form>
</body>
</html>