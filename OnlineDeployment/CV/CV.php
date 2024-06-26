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
<html>
<head>
  <title>My Resume</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <nav class="navbar">
    <ul>
      <li><a href="../MainPage/main.php">Main Page</a></li>
      <li><a href="../gallery.php">Gallery</a></li>
      <li><a href="../ContactMe/Contact.php">Contact</a></li>
    </ul>
    <div style="position: absolute; top: 10px; right: 10px; color: white; font-family: 'Arial', sans-serif;">
        <span>Welcome, <?php echo $_SESSION["username"]; ?></span>
        <a href="?logout=true" style="text-decoration: none; color: white; margin-left: 15px;">Logout</a>
    </div>
  </nav>
  <div class="fixed-panel">
    <img class = "image"src="Image.jpg" alt="Your Image">
    <h2 class = "header">Contact Info</h2>
    <hr>

    <p><img src = "name.png"> Name: Omar Fakhredin<br><img src = "email.jpg">Email: omar.fakhredin@lau.edu</br><img src = "phone.png">Phone: +961 78 825 961<br><img src = "address.png">Address: Beirut,Lebanon</p>
  <h2 class = "header">About Me</h2>
  <hr>
  <p>I am Omar Fakhredin, a motivated and dedicated computer science student with a strong passion for technology and programming. Currently pursuing a Bachelor of Science in Computer Science with a focus on software development. Eager to apply my knowledge and skills in a dynamic and challenging environment. Seeking opportunities to contribute to innovative projects and further enhance my expertise in areas such as database management, machine learning, and web development.</p>
  </div>
  <div class="main-content">
    <div class = "margin-bottom">
    <p><span class = "Name">Omar Fakhredin</span> <br><span class = "subName">Computer Science Student</span></p>
  </div>
  <h2>Education<hr class = "hr"></h2>
  <div>
    <div>
      <b>Lebanese American University (LAU)</b>, Beirut, Lebanon
    </div>
    <div>
      August 2021 - (Expected June 2024)
    </div>
  </div>
  <p>Bachelor of Science (BS) in Computer Science. GPA: 3.87/4.0<br>
Distinguished list: Fall 2021, Spring 2022, Fall 2022, Spring 2023.<br>

Lebanese Baccalaureate, General Sciences. Graduated with distinction.
</p>
 <h2>Skills<hr class = "hr"></h2>
 <div>
  <div>
      <b>Languages:</b> Arabic (native), English (fluent: reading, writing, & speaking)
  </div>
  <div>
      <b>Programming languages:</b> Python, Java, C++, C#, C
  </div>
  <div>
      <b>Game development:</b> Unity Engine
  </div>
  <div>
      <b>Operating systems:</b> Linux
  </div>
  <div>
      <b>Mobile development:</b> Flutter framework
  </div>
  <div>
      <b>Database management systems:</b> SQL Server
  </div>
</div>
 <h2>Course Projects<hr class = "hr"></h2>
 <p><b>Database:</b> created a database for a museum using oracle.<br>
<b>Machine Learning:</b> created a program that differentiates between ham and spam messages using python pandas and sklearn libraries.<br>
<b>Game Development:</b> flappy bird clone game.<br>
<b>Parallel Programming:</b> parallelized the Huffman Coding Algorithm for data compression using mpi, openMP, and Cuda C<br>
<b>Mobile Development:</b> developed a flutter front-end app for mental health therapy appointments<br>
<b>Software Engineering:</b> developed a website for a football club management system<br>
</p>
 <h2>Work Experience<hr class = "hr"></h2>
<p><b>Haceb Solution Provider (June 2023<code>&#8212;</code>Present):</b> Gained experience in web development using HTML, CSS, and JavaScript for frontend development, and used Asp.NET framework for the backend as well as Asp.Net identity for authentication and role-based authorization for a project that manages employee information and their allocated tasks.<br>
  <br><b>Integrated Digital Systems (July<code>&#8212;</code>August 2023):</b> Took part in an online internship in which I worked on a project for a meeting room booking system where the user can use available rooms for booking in a calendar view that shows the meetings booked for each day. This project was developed using HTML, CSS, BootStrap, and JavaScript for the frontend which was linked to the ASP.NET web API using JQuery.
</p>
  </div>
</body>
</html>
