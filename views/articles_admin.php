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
            <a href="index.php?action=add">add article</a>
            <table class="admin-table">
                <tr>
                    <th>date</th>
                    <th>heading</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach($articles as $a): ?>
                <tr>
                    <td><?=$a['date']?></td>
                    <td><?=$a['title']?></td>
                    <td><a href="index.php?action=edit&id=<?=$a['id']?>">edit</a></td>
                    <td><a href="index.php?action=delete&id=<?=$a['id']?>">delete</a></td>
                </tr>
                <?php endforeach ?>
            </table>
        </div>
        <footer>
            <p>My first blog<br> Copyright &copy: 2015</p>
        </footer>
    </div>
</body>
</html>