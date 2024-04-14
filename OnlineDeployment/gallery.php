<?php
    session_start();
    if (!isset($_SESSION["username"])){
        header("location:index.php");
    }
    if (isset($_GET["logout"])) {
        session_destroy();
        header("location:index.php");
    }
    function readGalleryFile($filename){
    $gallery = [];
    if (file_exists($filename)) {
        $gallery = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    }
    return $gallery;
    }

    $galleryFileName = "txtfiles/gallery.txt";
    $galleryImages = readGalleryFile($galleryFileName);
?>
<html>
<head>
    <title>Assignment 2</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="icons.css">
</head>
<body>
    <h1 style="margin-top: 8px;">My Gallery</h1>
    <div class="row right-content" id="header">
        <div id="dropdown-menu">
            <span>MENU<i class="ico menu-ico"></i></span>
            <div class="dropdown-content menu-rtl">
                <ul>
                    <a href="MainPage/main.php">
                        <li>Main Page</li>
                    </a>
                    <a href="CV/CV.php">
                        <li>CV</li>
                    </a>
                    <a href="ContactMe/Contact.php">
                        <li>Contact</li>
                    </a>
                </ul>
            </div>
        </div>

    <div style="position: absolute; top: 10px; line-height: 40px;left: 10px; color: white; font-family: 'Arial', sans-serif; font-weight: bold;">
            <span>Welcome, <?php echo $_SESSION["username"]; ?></span>
            <a href="?logout=true" style="margin-left: 15px;line-height: 40px; text-decoration: none; color: white;">Logout</a>
        </div>
       <div class="container">
        <?php
        
        foreach ($galleryImages as $image) {
            echo '<div class="imgs">';
            echo '<a href="images/' . htmlspecialchars($image) . '">';
            echo '<img src="images/' . htmlspecialchars($image) . '">';
            echo '</a>';
            echo '</div>';
        }
        ?>
    </div>
</body>
</html>
