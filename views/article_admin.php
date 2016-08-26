<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My first blog</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>My first blog indeed</h1>
        <div>
            <form method="post" action="index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">
                <label>
                    Title
                    <input type="text" name="title" value="<?=$article['title']?>" class="form-item" autofocus required>
                </label>
                <label>
                    Date
                    <input type="date" name="date" value="<?=$article['date']?>" class="form-item" required>
                </label>
                <label>
                    Content
                    <textarea name="content" class="form-item" required><?=$article['content']?></textarea>
                </label>
                <input type="submit" value="Save" class="btn">
            </form>
        </div>
        <footer>
            <p>My first blog<br> Copyright &copy: 2015</p>
        </footer>
    </div>
</body>
</html>