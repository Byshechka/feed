<?php session_start();
require_once '../lib/flash_messages.php';
require_once '../lib/db_queries.php';
$comment_data = [
    'id' => $_GET['id'],
    'post_id' => $_POST['post_id'],
    'content' => $_POST['content']
];
if (!$result = update_record('comments', $comment_data )) {
    print_r(mysqli_error_list($connect));
} else {
    $_SESSION['message'] = "Ваш комментарий обновлен! {$comment_data['post_id']}";
    return header('Location:/');
}