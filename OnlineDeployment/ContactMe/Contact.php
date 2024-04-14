<?php
    session_start();
    if (!isset($_SESSION["username"])){
        header("location:../index.php");
    }
    if (isset($_GET["logout"])) {
        session_destroy();
        header("location:../index.php");
    }
?>
<html lang="en">
<head>
    <title>Contact Info</title>
    <link rel="stylesheet" href="ContactStyle.css">
</head>
<body>
    <div class="header" id="header">
        <div id="dropdown-menu">
            <span>MENU</span>
            <div class="dropdown-content menu-rtl">
                <ul>
                    <li><a href="../MainPage/main.php">Main Page</a></li>
                    <li><a href="../CV/CV.php">CV</a></li>
                    <li><a href="../gallery.php">Gallery</a></li>
                </ul>
            </div>

        </div>
        <div style="position: absolute; top: 10px; right: 10px; color: white; font-family: 'Arial', sans-serif;">
            <span>Welcome, <?php echo $_SESSION["username"]; ?></span>
            <a href="?logout=true" style="text-decoration: none; color: white; margin-left: 15px;">Logout</a>
        </div>
    </div>
    <div class="container">
        <div class="contact-info">
            <h1>Contact Info</h1>
            <div class="box-1">
                <p class="ps">Date of Birth: April 20, 2003</p>
                <p class="ps">Gender: Male</p>
                <p class="ps">Email: omar.fakhredin@lau.edu</p>
                <p class="ps">Phone: +961 78 825 961</p>
                <p class="ps">Address: Beirut, Beirut Governerate, Lebanon</p>
            </div>
        </div>
    </div>
</body>
</html>
