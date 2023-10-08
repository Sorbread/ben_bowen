
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
            Name <input type="text" name="name" class="form_component">
            <label>
                <select name="review_minimum" id="review_minimum" class="form_component">
                    <option value="0">Any</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </label>
            <input type="submit" class="form_component">
        
    </div>

    <?php
        $rating = $_GET["review_minimum"];
        $showall_sql="SELECT * FROM `art_reviews` WHERE `rating` >= $rating;";
        $showall_query=mysqli_query($dbconnect,$showall_sql);
        $showall_rs=mysqli_fetch_assoc($showall_query);
        $count=mysqli_num_rows($showall_query);

        $result = $dbconnect->query($showall_sql);
        $result_string = "";
        while($r = mysqli_fetch_assoc($result)) {
            $username = $r["Name"];
            $review = $r["Review"];
            $star_rating = $r["Rating"];

            include "review.php";
            
        }
        
        echo "$result_string";

        ?>

    <!-- Footer -->
    <?php include "footer.php"; ?>
</body>
</html>
