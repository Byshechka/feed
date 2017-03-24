
<?php require_once '../lib/db_connect.php';
require_once '../lib/db_queries.php';
?>
<html>
<head>
    <link rel="stylesheet" type="text/css"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
</head>
<body>

<?php
//  foreach ()
//echo '<h1>', $comment->post_id,'</h1>';
//echo '<p>', $comment->content,'</p>';
//?>
<table class='table'>
    <thead>
    <th>ID</th>
    <th>Заголовок</th>
    <th>Описание</th>
    </thead>
    <tbody>
    <?php
    $query = mysqli_query($connect,"SELECT * FROM posts WHERE id={$_GET['id']}");
    while($post = mysqli_fetch_object($query)) {
        echo '<tr>';
        echo '<td>', $post->id, '</td>';
        echo '<td>', $post->title, '</td>';
        echo '<td>', $post->description, '</td>';
        echo '</tr>';
    }
    ?>
    </tbody>
</table>
<table class='table'>
    <thead>
    <th>ID</th>
    <th>Айди поста</th>
    <th>Контент</th>
    <th>Удалить</th>
    <th>Редактировать</th>
    </thead>
    <tbody>
    <?php
    foreach(select_records_comments('comments') as $comment){
        echo '<tr>';
        echo '<td>',$comment->id,'</td>';
        echo '<td>',$comment->post_id,'</td>';
        echo '<td>',$comment->content,'</td>';
        echo '<td>',"<a href='./delete_comment.php?id=$comment->id'>Удалить</a>",'</td>';
        echo '<td>',"<a href='./edit_comment.php?id=$comment->id'>Редактирвать</a>",'</td>';
        echo '</tr>';
    }
    ?>
<!--    --><?php
//    $query = mysqli_query($connect,"SELECT * FROM comments WHERE post_id={$_GET['id']}");
//    while($comment = mysqli_fetch_object($query)){
//        echo '<tr>';
//        echo '<td>',$comment->id,'</td>';
//        echo '<td>',$comment->post_id,'</td>';
//        echo '<td>',$comment->content,'</td>';
////    echo '<td>',"<a href='/show.php?id=$post->id'>Открыть коментарий</a>",'</td>';
//        echo '</tr>';
//    }
//    echo '<a href="/">Cсылка назад</a>';
//    ?>
    </tbody>
</table>
<a class="btn btn-primary col-md-2 col-md-offset-5 " href="../comments/new_comment.php">Новый комментарий</a>
<a class="btn btn-primary col-md-1 col-md-offset-1 " href="/">Cсылка назад</a>
</body>
</html>
