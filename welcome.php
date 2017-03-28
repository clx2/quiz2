<!-- in this file you will have a html `form` that a user can enter their first name, last name, and email address
- you can make the form to sign up for anything you want, be creative
- make sure to name your inputs appropriately
- you will check in this file for the cookie created in the next step -->

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <link href="./CSS/quizcss.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
  <title>Quiz 2</title>
</head>

<body>
  <div class="head">
    <header id="header">
      <strong> <h1> Welcome </h1> </strong>
      <h2> Sign up for a lifetime supply of girl scout cookies! </h2>
    </header>
  </div>

  <div class="contact" id="main">
    <p> <b> Contact Form </b> </p>
      <form action="register.php" method="post">
        Enter first name:
        <br><input type="text" name="nameF"><br>
        Enter last name:
        <br><input type="text" name="nameL"><br>
        Enter email:
        <br><input type="text" name="email"><br>
        <input type="submit" value="Submit"><br>
      </form>;
  </div>

</body>
</html>
