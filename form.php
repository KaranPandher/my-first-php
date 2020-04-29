<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <title>PHP Form Handling</title>
    </head>
    <body>
        <h1> PHP form Handling</h1>
        <?php include './includes/navigation.php'; ?>
        <h2> Sign in Form </h2>
        <form action = "./form.php" method = "GET" ><?php // Forms cna use GET or POST method 
        ?>
            <label for = "username">
                Username:
            </label>
            <label for ="password">
                Password: 
            <input type = "password" name = "password">
            </label>
            <input type = "submit" value = "Sign In">
        </form>
    </body>
</html> 