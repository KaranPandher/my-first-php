<?php

session_start(); // BEFORE ANY OUT PUT YOU MUST DECLARE YOU WOULD LIKE TO START SESSION
// Lets check if our SESSION entery exists... 
if (!isset($_SESSION['interests'])) { // if it DOESNT exists, letts make a default value (this way we can array_push to it later!)
    //This avoids errors 
    $_SESSION['interests'] = array();
}

$message = 'Welcome to the Website, Please Log in. ';
// If a form has been submitted to this page, we can collect the submission
// information using one of two SUPERGLOBALS:
// $_GET [array] (if the form was submitted with a GET method.)
// $_POST [array] (if the form was submitted with a POST method.)
if (isset($_POST) && !empty($_POST)) // Making sure SOMETHING was submitted.
// isset checks if $_POST has a value and make sures the variable DOES exisit and that it is empty 
{
    // Retrieving values from an array (use square brackets and either: the index
    // number or the key name [a string.]) // $_POST is an associative array (uses keys
    // instead of index numbers.) Key-value pair for associative.
    $submittedUsername = $_POST['username'];
    $submittedPassword = $_POST['password'];
    // Expected username and password (hardcoded.)
    $username = 'warren';
    $password = 'mypass';
    // Succesful login.... 
    if (($username === $submittedUsername) && ($password === $submittedPassword)) {
        $message = 'Hello, ' . $username . 'Thank you for logging in. ';
        // "." used as concatentation (+) , changes the $message above 
        // Make sure you have Session_start above 
        // We are adding a new element to an array using the array_push function
        // The first argument is the array, the second is the element/value we are adding
        array_push($_SESSION['interests'], $_POST['interests']);
    }
    // Unsuccesful login... 
    else {
        $message = 'Uh oh! Please try again, your username, and/or password were incorrect!';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Handling</title>
</head>

<body>
    <h1>PHP Form Handling</h1>
    <?php include './includes/navigation.php'; ?>
    <h2>Sign In Form</h2>
    <?php echo $message; // Output our signin related message. 
    ?>
    <form action="./form.php" method="POST"><?php // Forms can use GET or POST method. 
                                            ?>
        <label for="username">
            Username:
            <input type="text" name="username" id="username">
        </label>
        <label for="password">
            Password:
            <input type="password" name="password" id="password">
        </label>
        <label for="interest">
            Add an interest:
            <input type="text" name="interest" id="interest">
        </label>
        <input type="submit" value="Sign In">
    </form>
    <?php if (!empty($_SESSION['interests'])) : // Check if there ARE interests. ?> 
        <!-- The semi colon is equivalent to {} ending with endif; -->
        <h2>My Interests: </h2>
        <ul>
            <?php foreach ($_SESSION['interests'] as $interest) : ?>
                <!-- Output for EACH interest in the array --> 
                <li>
                    <?php echo $interest; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <pre>
        <strong> $_POST contents:</strong> 
    <?php var_dump($_POST); ?>
    <!-- Var_dump is used to dump information --> 
  </pre>
    <pre>
        <strong> $_SESSION contents: </strong>
      <?php var_dump($_SESSION); ?>
  </pre>
</body>

</html>