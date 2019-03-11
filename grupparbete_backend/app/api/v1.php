<?php
header('Content-Type: application/json;charset=utf-8');

$db = new Database;
$sql = "SELECT `id`, `category_id`,`name`,`description`,`price` FROM `products`";
$db->query($sql);
$array = $db->resultset(PDO::FETCH_ASSOC);

$json = json_encode($array, JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);
echo $json;