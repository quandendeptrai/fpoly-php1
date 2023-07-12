<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP - A Simple HTML Form</title>
</head>
<body>
    <h1>PHP - A Simple HTML Form</h1>

    <form action="backend/login.php" method="POST">
        <label for="email">Email:</label> <br>
        <input type="email" name="email" id="email"> <br> <br>

        <label for="password">Password:</label> <br>
        <input type="password" name="password" id="password"> <br> <br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>