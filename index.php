<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo $_SERVER['HTTP_USER_AGENT'];
        ?>
        
        <form action="action.php" method="POST">
            <p> Your Name: <input type="text" name="yourName" /></p>
            <p> Your Age: <input type="text" name="yourAge" /></p>
            <p> <input type="submit" /></p>
        </form>
    </body>
</html>
