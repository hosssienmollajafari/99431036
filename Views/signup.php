<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- meta data -->
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- title -->
        <title>Signup</title>
        <!-- style -->
        <link rel="stylesheet" href="../Css/signup.css" />
    </head>
    <body>
        <section>
            <header>
                <h1>Signup</h1>
            </header>
            <form action="../Php/signup.php" method="post">
                <input type="text" name="userName" placeholder="username" />
                <input type="password" name="userPass" placeholder="password" />
                <input type="password" name="confirmPass" placeholder="confirm password" />
                <a href="./signin.php">Have an account?</a>
                <input type="submit" value="Signup" />
            </form>
        </section>
        <aside></aside>
    </body>
</html>