<?php require_once 'lib/db_connect.php'; ?>
<html>
<head>
    <link rel="stylesheet" type="text/css"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
</head>
<body>
<?php
$query = mysqli_query($connect,"SELECT * FROM posts WHERE id={$_GET['id']}");
if ($post = mysqli_fetch_object($query)) {
    echo '<h1>', $post->title, '</h1>';
    echo '<p>', $post->description, '</p>';
    echo '<a href="/">Cсылка назад</a>';
}else{
    echo '<h1>Пост отсутствует</h1>';
}
?>
</body>
</html>