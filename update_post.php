<?php session_start();
require_once 'lib/flash_messages.php';
require_once 'lib/db_queries.php';
$post_data = [
    'id' => $_GET['id'],
    'title' => $_POST['title'],
    'description' => $_POST['description']
];
if (!$result = update_record('posts', $post_data )) {
    print_r(mysqli_error_list($connect));
} else {
    $_SESSION['message'] = "Ваш пост обновлен! $title";
    return header('Location:/');
}