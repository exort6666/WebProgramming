<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab_5</title>
</head>
<body>
<div id="form">
    <form action="Helper.php" method="post">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>

        <label for="category">Category</label>
        <select name="category" id="category" required>
            <option value="electronics">Electronics</option>
            <option value="clothing">Clothing</option>
            <option value="books">Books</option>
            <option value="furniture">Furniture</option>
            <option value="other">Other</option>
        </select>

        <label for="title">Title</label>
        <input type="text" name="title" id="title" required>

        <label for="description">Description</label>
        <textarea name="description" id="description" rows="5"></textarea>

        <input type="submit" value="Save">
    </form>
</div>

<div id="table">
    <table>
        <thead>
        <tr>
            <th>Category</th>
            <th>Title</th>
            <th>Description</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
        <?php
        require_once 'db_connect.php';

        $connection = db_connect();

        $result = $connection->query("SELECT * FROM ad");

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['category'] . "</td>";
            echo "<td>" . $row['title'] . "</td>";
            echo "<td>" . $row['description'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "</tr>";
        }

        $connection->close();
        ?>
        </tbody>
    </table>
</div>
</body>
</html>
