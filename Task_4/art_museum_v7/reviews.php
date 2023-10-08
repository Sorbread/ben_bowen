<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daniel's Museum</title>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/images.css">

</head>
<body>
    <!-- Navbar -->
    <?php include "navbar.php"; 
        
    ?>
    <!-- Welcome Message -->
    <div class="box">
        <!-- Image needs to be seperated to allow text to not be blurred -->
        <div class="background_img" id="niagara"></div>
        <div class="welcome">
            <h1 class="maori">Oratake</h1> 
            <h1>Reviews</h1> 
        </div>
    </div>

    <div class="box information_box reverse_information_box medium">
        <form action="review_search.php" method="get">
            Name <input type="text" name="name">
            Rating <input type="number" name="rating">
            <input type="submit">
        
        
    </div>

    <!-- Footer -->
    <?php include "footer.php"; ?>
</body>
</html>
