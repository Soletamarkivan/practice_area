<?php
include "code.php";
include "db_connection.php";
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>

<body>
    <?php echo $notif ?>
    <form action="code.php" method="post">
        <input type="text" name="uname" id="uname" placeholder="username">
        <input type="text" name="pass" id="pass" placeholder="password">
        <button type="submit">login</button>
    </form>

</body>

</html>