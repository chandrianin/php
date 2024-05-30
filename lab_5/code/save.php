<?php
require_once __DIR__ . '/func.php';

if (empty($_POST['email'])) {
    header("HTTP/1.1 404 Not Found");
    exit();
}

$db = extracted();

$inputData = array();
$inputData[] = $_POST['email'];
$inputData[] = !empty($_POST['title']) ? $_POST['title'] : "untitled";
$inputData[] = $_POST['description'];
$inputData[] = !empty($_POST['category']) ? $_POST['category'] : "other";

//var_dump($inputData);

$stmt = $db->prepare("INSERT INTO web.ad (email, title, description, category) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss",$inputData[0], $inputData[1], $inputData[2], $inputData[3]);
$stmt->execute();

$stmt->close();
$db->close();


header('Location: /');
exit();

