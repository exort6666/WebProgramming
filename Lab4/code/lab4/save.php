<?php
function redirectToHome(): void
{
    header('Location: /');
    exit();
}

if (false === isset($_POST['email'], $_POST['category'], $_POST['title'], $_POST['description']))
{
    redirectToHome();
}

$title = $_POST['title'];
$desc = $_POST['description'];
$category = $_POST['category'];
$desc .= "\n".$_POST['email'];

$filePath = "categories/{$category}/{$title}.txt";

if (false === file_put_contents($filePath, $desc))
{
    throw new Exception("Can't put in file");
}
chmod($filePath, 0777);
redirectToHome();