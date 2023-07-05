<!DOCTYPE html>
<html>
<head>
    <title> SQL Injection and Prevention </title>
</head>

<body>
    <div>
        <h1 class="card-title">SQL Injection</h1>
        <form action="loginSQLInjection.php" method="post">
            <label for="fname">Username:</label><br>
            <input type="text" id="uname" name="uname" placeholder="Enter Username"><br>
            <label for="lname">Password:</label><br>
            <input type="password" id="pass" name="pass" placeholder="Enter Password"><br><br>
            <input type="submit" id="btn" value="Login">
        </form>

        <br><br>

        <h1 class="card-title">SQL Injection Prevention</h1>
        <form action="loginPreventingSQLInjection.php" method="post">
            <label for="fname">Username:</label><br>
            <input type="text" id="uname" name="uname" placeholder="Enter Username"><br>
            <label for="lname">Password:</label><br>
            <input type="password" id="pass" name="pass" placeholder="Enter Password"><br><br>
            <input type="submit" id="btn" value="Login">
        </form>

    </div>
</body>

</html>