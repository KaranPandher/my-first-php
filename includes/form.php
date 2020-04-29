<?php // If a form has been submittted ot this page, we can collect the submission information using one of two SUPERGLOBALS: 
// $_GET ( if the form was submitted with a GET method. ) 
// $_POSt (if the form was submitted with a POST method. ) both are arrays 
if ( isset($_POST) && !empty ($_POST) )  // Making sure SOMETHING was submitted. 
{
    // Retrieving values from an array ( use square backs and either: the index )
    // number or the key name [a string. ]) 
    // $_POST is an associative array (uses keys instead of index numbers)
    $submittedUsername = $_POST['username'];
    $submittedPassword = $_POST['password'];
}
?>

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
            <label for = "username" id = "username">
                Username:
            </label>
            <label for ="password">
                Password: 
            <input type = "password" name = "password" id = "password">
            </label>
            <input type = "submit" value = "Sign In">
        </form>
        <pre>
            <?php var_dump($_POST); ?>
        </pre>
    </body>
</html> 