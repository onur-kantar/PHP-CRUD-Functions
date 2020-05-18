<?php

$id = $_GET['id'];

$sorgu = $db->prepare("DELETE FROM users WHERE id = :id");
$sorgu->execute([
    'id' => $id
]);

header('Location:' . $_SERVER['HTTP_REFERER']);
exit;
