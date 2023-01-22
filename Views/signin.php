<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- meta data -->
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- title -->
        <title>Signin</title>
        <!-- style -->
        <link rel="stylesheet" href="../Css/signin.css" />
        <!-- script -->
        <script src="../Js/signin.js" defer></script>
    </head>
    <body>
        <section>
            <header>
                <h1>Signin</h1>
            </header>
            <form action="../Php/signin.php" method="post">
                <input 
                    type="text"
                    name="userName" 
                    placeholder="Username"
                />
                <input 
                    type="password"
                    name="password"
                    placeholder="Password"
                />
                <span id="seePass">🙈</span>

                <a href="./signup.php">Don't have an account?</a>

                <input
                    type="submit"
                    value="Signin"
                />
            </form>
        </section>
        <aside></aside>
    </body>
</html>