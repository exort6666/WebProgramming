<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Данные о текущем пользователе:</title>
</head>
<body>
<ul>
    <?php
    foreach ($_SESSION['userdata'] as $key => $value) {
        echo "<li>$key: $value</li>";
    }
    ?>
</ul>
</body>
</html>
