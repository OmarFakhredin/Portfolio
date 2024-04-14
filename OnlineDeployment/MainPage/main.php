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
  <link rel="stylesheet" href="style2.css" />
  <title>Document</title>
</head>
<body id="custom">
  <div id="bg">
    <div class="container2">
      <span id="nav-bar-comp">
        <a href="main.php">Home</a>
        <a href="../CV/CV.php">CV</a>
        <a href="../gallery.php">Gallery</a>
        <a href="../ContactMe/Contact.php">Contact Me</a>
        <div style="position: absolute; top: 0; line-height: 40px;right: 0; padding: 10px; color: white; font-family: 'Arial', sans-serif;">
          <span>Welcome, <?php echo $_SESSION["username"]; ?></span>
          <a href="?logout=true" style="text-decoration: none; color: white; margin-left: 15px;">Logout</a>
        </div>
      </span>
    </div>
    <div class="custom container">
      <div>
        <h1>
          I am
          <span class="special">Omar Fakhredin</span>
           a passionate and motivated computer science student deeply committed to technology and programming. With a focus on database management, machine learning, and web development, I am driven to apply my skills in innovative projects and continuously grow in the dynamic field of computer science.
        </h1>
      </div>
      <div class="image-container">
        <img src="../CV/Image.jpg" alt="Your Image" class="profile-image">
      </div>
    </div>
  </div>
</body>
</html>
