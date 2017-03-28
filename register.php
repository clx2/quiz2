<!-- in this file you will get and the `POST` data from `welcome.php`, process it and store the values to a cookie
 - next, if the user were to re-visit `welcome.php` after filling out the form, display the cookie values as
 "Hi, `first name`, you recently signed up with the email address: `email address`, thank you!"
 - if the user clears cookies, the form should appear again -->
<!doctype html>

  <html>
  <head>
    <meta charset="utf-8">
    <link href="./CSS/quizcss.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <title>Quiz 2</title>
  </head>
  <body>
    <p> Thank you for submitting! </p>
    <?php
    if(isset($_COOKIE["firstName"]))
    {
        setcookie("firstName", $_POST["firstName"], time() + (86400*30), "/");
    }
    else if(!isset($_COOKIE["email"]))
    {
        setcookie("email", $_POST["email"], time() + (86400*30), "/");
    }
    else
    {
      echo "Hi, " . $firstName . " you recently signed up with the email address: " .
      $_COOKIE["email"] . ", thank you!";
    }

    ?>
  </body>
  </html>
