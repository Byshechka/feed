<?php
require_once '../lib/auth_check.php';
check_user_auth();
require_once '../lib/db_queries.php';

$id = $_GET['id'];
if (!empty($id)) {
    if (!delete_record('comments', 'id', $id)) {
        $_SESSION['message'] = "Ошибка удаления!";
    } else {
        $_SESSION['message'] = "Ваш комментарий УДАЛЕН!";
    }
}else{
    $_SESSION['message'] = "Введите корректный id";
}
return header('Location:/comments/');
