    <?php
        view('partials/header.partial.php', ['title' => 'Driver Login']);
    ?>
    <h1>Driver Login</h1>
    <form action="/login-driver" method="POST">
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
            <a href="/login">Are you a rider?</a>
        </div>
        <div>
            <?php if (isset($errors['user']))  echo $errors['user']; ?>
            <?php if (isset($errors['password']))  echo $errors['password']; ?>
        </div>
    </form>
</body>
</html>