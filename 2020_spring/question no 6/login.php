<!DOCTYPE html>
    <head>
        <title>Log in</title>
    </head>
    <body>
        <div>
            <form action="process_login.php" method="POST" id="form" >

                    Email:<input type="text" id="email" name="usermail"></br>
                    Password: <input type="password" id="password" name="userpass"></br>
                    <input type="submit" value="Login" id="submit" onclick="validate()">
            </form>
        </div>
        <script src="script_login.js" type="text/javascript"> </script>
    </body>
</html>