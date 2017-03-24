<?php require_once 'lib/db_queries.php'; ?>
<html>
<head>
    <link rel="stylesheet" type="text/css"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
</head>
<body>
<?php
if($post = select_records('posts', 'id', $_GET['id'], true)){
    echo '<h1>', $post->title,'</h1>';
    echo '<p>', $post->description,'</p>';
    echo '<a href="/">Cсылка назад</a>';
}else{
    echo '<h1>Пост отсутствует!</h1>';
}
?>
</body>

