<?php

$name = "Kaspar";

$list = ['piim', 'sai', 'leib'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hi my name is <?php echo $name; ?> </h1>
    <ul>
        <?php foreach($list as $item): ?>
            <li><?=$item?></li>
        <?php endforeach; ?>
    </ul>
    <form action="/greeting.php">
        <input type="text" placeholder="Your name here..." name="name">
        <input type="submit">
    </form>
</body>
</html>
