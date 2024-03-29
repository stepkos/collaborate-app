<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="static/css/forms.css" type="text/css">
</head>
<body>

    <header>
        <h1>Login</h1>
    </header>

    <main>
        <article>
            <div class="container">
                <form method="POST">
                    <div class="fieldset">
    
                        
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email"
                        <?= (isset($_SESSION['form_email'])) ? 'value = "'.$_SESSION['form_email'].'"' : '' ?>>
            
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password">
                        
                        <div class="center">
                            <input type="submit" value="Log in">
                        </div>
                        
                        <div class="center pt">
                            <a href="register">Register If you already don't have account</a>
                        </div>

                    </fieldset>
                </form>
            </div>
        </article>
    </main>

    <script src="static/javascript/error.js"></script>
    <script>
        <?= (isset($_SESSION['form_error_email'])) ? 'error("email", "'.$_SESSION['form_error_email'].'");' : '' ?>
    </script>

</body>
</html>
