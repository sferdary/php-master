<?php
/**
 * Created by PhpStorm.
 * User: S. Ferdary
 * Date: 15/11/2018
 */
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>003_04</title>
    <link href="style.css" rel="stylesheet">
</head>
<body class="centered_text">
<div>
    <?php
    for ($i = 0; $i <= 100; $i++) {
        for ($j = 0; $j < $i; $j++) {
            echo "*";
        }
        echo "*<br>";
    }
    ?>
</div>
</body>
</html>