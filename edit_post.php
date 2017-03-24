<?php
require_once 'lib/auth_check.php';
check_user_auth();
require_once 'lib/flash_messages.php';
require_once 'lib/db_queries.php';
require_once 'forms/post_form.php';
$id = $_GET['id'];
?>
<html>
<head>
    <title>Тестовая форма</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <?php
        if (!empty($id)) {
            if (!$post = select_records('posts', 'id', $id, true)) {
                $_SESSION['message'] = "Ваш пост 404!";
                return header('Location:/');
            } else {
                echo get_post_form("update_post.php?id=$post->id", 'edit', $post);
            }
        } else {
            $_SESSION['message'] = "Введите корректный id";
            return header('Location:/');
        }
        ?>
    </div>
</div>
</body>
</html>