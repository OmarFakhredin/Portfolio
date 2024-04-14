<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="forms.css">
    <title>Login</title>
</head>

<body>
    <header style="text-align: center; margin-bottom: 20px;">
        <h1>Welcome</h1>
    </header>

    <div class="container" style="width: 300px; margin: auto;">
        <div class="title">
            <h2>Login</h2>
        </div>

        <div class="paragraph" style="border: 0;">
            <form action="Backend/login.php" method="POST" id="login-form">
                <div class="form-group">
                    <label for="un">User Name</label>
                    <input type="text" name="username" id="un" class="txtfield">
                </div>

                <div class="form-group">
                    <label for="pass">Password</label>
                    <input type="password" name="password" id="pass" class="txtfield">
                </div>

                <div class="form-group">
                    <input type="button" value="Login" onclick="login()" class="mButton">
                    <input type="button" value="Cancel" onclick="ClearForm()" class="mButton">
                </div>
            </form>
            <a href="html/signup.html">Sign Up...</a>
        </div>
    </div>

    <script>
        function login() {
            var un = document.getElementById("un").value;
            var pass = document.getElementById("pass").value;
            if ((un == "") || (pass == "")) {
                alert("You must fill in the username and the password!");
            } else {
                document.getElementById("login-form").submit();
            }
        }

        function ClearForm() {
            document.getElementById("un").value = "";
            document.getElementById("pass").value = "";
        }
    </script>
</body>

</html>
