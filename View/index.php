<?php
include "../config/load.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artisan Cake Studio - Premium Homemade Cakes</title>
    <link rel="stylesheet" href="../public/css/styles.css">
</head>
<body>
    <?php
    load_template("navbar");
    load_template("banner");
    load_template("menu");
    load_template("gallery");
    load_template("about");
    load_template("testimonial");
    load_template("contact");
    load_template("footer");
    ?>

    <script src="../public/script/menu-data.js"></script>
    <script src="../public/script/script.js"></script>
</body>
</html>
<?php

