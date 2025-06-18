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

        $stmt = $pdo->query("SELECT * FROM users");
        $users = $stmt->fetchAll();
    ?>

    <table border="1">
        <tr>
            <th>ID</th><th>Όνομα</th><th>Επώνυμο</th><th>Email</th>
        </tr>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $user['userid'] ?></td>
                <td><?= $user['firstname'] ?></td>
                <td><?= $user['lastname'] ?></td>
                <td><?= $user['email'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <p><a href="new_user.php">Προσθέστε νέο χρήστη.</a></p>
</body>
</html>