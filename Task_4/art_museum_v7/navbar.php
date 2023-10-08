<!-- 
    Navbar.php
    Holds navbar, and also begins <main> section at end of navbar
-->

<?php

    session_start();
    include("config.php");

    // Connect to database
    $dbconnect=mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);

    if(mysqli_connect_errno())
    {
        echo "Connection Failed".mysqli_connect_error();
        exit;

    }

?>

<div class="wrapper">
    <header class="box">
        <a href="./index.php"><h2 id="brand"><span id="large_font">D</span>aniel's<br><span id="large_font">M</span>useum</h2></a>
    </header>
    <nav class="box">
        <a href="./gallery.php">
            <h2 class="maori">Taiwhanga</h2>
            <h2>Gallery</h2>
        </a>
        <a href="./about.php">
            <h2 class="maori">Mō</h2>
            <h2>About</h2>
        </a>
        <a href="./contact.php">
            <h2 class="maori">Whakapā</h2>
            <h2>Contact</h2>
        </a>
        <a href="./reviews.php">
            <h2 class="maori">Arotake</h2>
            <h2>Reviews</h2>
        </a>
    </nav>
    <main>