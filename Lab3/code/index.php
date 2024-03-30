
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Avito</title>
</head>
<body>
    <div id = "form">
        <form action = "save.php" method = "post">
            <label for="email">Email</label>
            <input type = "email" name = "email" required>

            <label for="category">Category</label>
            <select name = "category" required>
                foreach directories

                <option value = "cars">Cars</option>
                <option value = "other">Other</option>
            </select>

            <label for = "title">Email</label>
            <input type = "text" name = "title" required>

            <label for = "description">Email</label>
            <textarea rows = "3" name = "description"></textarea>

            <input type = "submit" value = "Save">

        </form>
    </div>
    </div>
    <div id = "table">
            <table>
                <thead>
                    <th>Category</th>
                    <th>Title</th>
                    <th>Description</th>
                </thead>
                <tbody>
                    <tr>
                        <td>other</td>
                        <td>phone</td>
                        <td>information</td>
                    </tr>
                </tbody>
            </table>
</body>
</html>