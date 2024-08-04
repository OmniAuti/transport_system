    <?php
        view('partials/header.partial.php', ['title' => 'Login']);
    ?>
    <h1>Login</h1>
    <form action="/login" method="POST">
        <div>
            <input placeholder="Use Email" type="email" name="login_email" id="">
        </div>
        <div>
            <input placeholder="Password" type="password" name="login_password" id="">
        </div>
        <div>
            <input type="submit" value="Login">
        </div>
        <div>
            <?php if (isset($errors['user']))  echo $errors['user']; ?>
            <?php if (isset($errors['password']))  echo $errors['password']; ?>
        </div>
    </form>
</body>
</html>