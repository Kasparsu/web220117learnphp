<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Home</h1>
    <h2><?=$name?></h2>
    <a href="?page=2">page 2</a>
    <form method="GET" action="/">
        <input type="number" name="page">
        <input type="submit">
    </form>
    <form method="POST" action="/?email=4">
        <input type="email" name="email">
        <input type="password" name="pass">
        <input type="submit">
    </form>
    <form method="POST" action="/" enctype="multipart/form-data">
        <input type="file" name="image">
        <input type="text" name="title">
        <input type="submit">
    </form>
</body>
</html>