<?php
    $menus=["Trang chủ", "tin tức", "Liên hệ", "Giới thiệu"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        <ul>
            <?php foreach ($menus as $i) { ?>
            <li><a href="#"./><?= $i ?></a></li>
            <?php } ?>
        </ul>
    </nav>
</body>
</html>