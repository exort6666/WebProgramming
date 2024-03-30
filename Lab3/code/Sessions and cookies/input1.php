<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Сохраняем заполненные данные в массив в сессии
    $_SESSION['userdata'] = array(
        'name' => $_POST['name'],
        'age' => $_POST['age'],
        'salary' => $_POST['salary'],
        'something' => $_POST['something']
    );
    header("Location: page4.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Форма</title>
</head>
<body>
<h2>Введите ваше имя,возраст,зарплату и ещё что-нибудь:</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Имя: <input type="text" name="name"><br><br>
    Возраст: <input type="text" name="age"><br><br>
    Зарплата: <input type="text" name="salary"><br><br>
    Ещё что-нибудь: <input type="text" name="dream"><br><br>
    <input type="submit" value="Отправить">
</form>
</body>
</html>