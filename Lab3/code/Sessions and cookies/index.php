<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Сохраняем заполненные данные в сессию
    $_SESSION['surname'] = $_POST['surname'];
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['age'] = $_POST['age'];
    header("Location: output1.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Форма</title>
</head>
<body>
<h2>Введите вашу фамилию, имя и возраст:</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Ваша фамилия: <input type="text" name="surname"><br><br>
    Ваше имя: <input type="text" name="name"><br><br>
    Ващ возраст: <input type="text" name="age"><br><br>
    <input type="submit" value="Отправить">
</form>
</body>
</html>