<?php
require_once '../lib/auth_check.php';
check_user_auth();
require_once '../lib/flash_messages.php';
require_once '../lib/db_queries.php';
require_once '../forms/comment_form.php';
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
            if (!$comment = select_records('comments', 'id', $id, true)) {
                $_SESSION['message'] = "Ваш пост 404!";
                return header('Location:/');
            } else {
                echo get_comment_form("update_comment.php?id=$comment->id", 'edit', $comment);
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