<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Museapp</title>
</head>
<body>
    <?php
        require 'db.php';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $stmt = $pdo->prepare("INSERT INTO users (firstname, lastname, email) VALUES (?, ?, ?)");
            $stmt->execute([$_POST['firstname'], $_POST['lastname'], $_POST['email']]);
            echo "Ο χρήστης προστέθηκε!";
        }
    ?>

    <form method="post">
        Όνομα: <input type="text" name="firstname"><br>
        Επώνυμο: <input type="text" name="lastname"><br>
        Email: <input type="email" name="email"><br>
        <input type="submit" value="Προσθήκη">
    </form>
</body>
</html>