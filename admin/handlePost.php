<?php
require_once '../models/Post.php';

$title = $_POST["title"];
$content = $_POST["content"];
$from = $_FILES["img"]['tmp_name'];
$fileName = $_FILES['img']['name'];
$imgSrc = "../assets/img/".$fileName;
$nextId = count($GLOBALS['posts']) + 1;

move_uploaded_file($from, $imgSrc);

extract($_REQUEST);
$file = fopen("data.txt", "a");

fwrite($file, "\n$nextId, $title, $content, $imgSrc");
fclose($file);

header("Location: ./posts.php");
exit();
?>