<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lenovo Branded Website</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div>
    <h1>Articles</h1>
    <div>
        <div>
            <h3><?=$article['title']?></h3>
            <em>Created at: <?=$article['date']?></em>
            <p><?=$article['content']?></p>
        </div>
    </div>
    <footer>Post #2 &copy; 2016</footer>
</div>
</body>
</html>