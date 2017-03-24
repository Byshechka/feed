<?php
require_once 'lib/flash_messages.php';
require_once 'lib/db_queries.php';
require_once 'lib/auth_check.php';
?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="/assets/bootstrap.min.css"/>
</head>
<body>
<?php echo show_flash_message('message');
?>
<table class='table'>
    <thead>
    <th>ID</th>
    <th>Заголовок</th>
    <th>Описание</th>
    <th>Ссылка</th>
    <th>Удалить</th>
    <th>Редактировать</th>
    </thead>
    <tbody>
    <?php
    foreach(select_records('posts') as $post){
        echo '<tr>';
        echo '<td>',$post->id,'</td>';
        echo '<td>',$post->title,'</td>';
        echo '<td>',$post->description,'</td>';
        echo '<td>',"<a href='comments/index.php?id=$post->id'>Открыть комментарий</a>",'</td>';
        echo '<td>',"<a href='/delete.php?id=$post->id'>Удалить</a>",'</td>';
        echo '<td>',"<a href='/edit_post.php?id=$post->id'>Редактирвать</a>",'</td>';
        echo '</tr>';
    }
    ?>
    </tbody>
</table>
<?php if(user_exists()): ?>
<a class="btn btn-danger col-md-1 col-md-offset-5 " href="/login/user_auth_delete.php">Выход</a>
<?php else: ?>
    <a class="btn btn-info col-md-1 col-md-offset-5 " href="/login/">Вход</a>
<?php endif; ?>
<a class="btn btn-primary col-md-1 col-md-offset-5 " href="/new_post.php">Новый пост</a>
</body>
</html>
