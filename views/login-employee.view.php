    <?php
        view('partials/header.partial.php', ['title' => 'Driver Login']);
    ?>
    <body>
    <h1>Driver Login</h1>
    <form action="/login-employee" method="POST">
        <div>
            <input placeholder="Email" type="email" name="login_email" id="">
        </div>
        <div>
            <input placeholder="Password" type="password" name="login_password" id="">
        </div>
        <div>
            <input type="submit" value="Login">
        </div>
        <div>
            <a href="/login">Are you a Customer?</a>
        </div>
        <div>
            <?php if (isset($errors['email']))  echo $errors['email']; ?>
            <?php if (isset($errors['password']))  echo $errors['password']; ?>
        </div>
    </form>
</body>
</html>