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
            <?php foreach($articles as $a): ?>
                <div>
                    <h3><a href="article.php?id=<?=$a['id']?>"><?=$a['title']?></a></h3>
                    <em>Created at: <?=$a['date']?></em>
                    <p><?=articles_intro($a['content'])?></p>
                </div>
            <?php endforeach ?>
        </div>
        <footer>Post #2 &copy; 2016</footer>
    </div>
</body>
</html>