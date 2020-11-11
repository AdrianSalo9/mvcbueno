<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('../views/parts/head.php') ?>
    <?php include('../views/parts/header.php') ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../public/js/bootstrap.js"></script>
    <script src="../public/js/jquery-3.js"></script>
    <script src="../public/js/popper.js"></script>
    <title>MVC</title>
</head>
<body>
    <h1>Lista de usuarios  </h1>
    <table>
        <thead>
            <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>F. Nacimiento</th>
            </tr>
        </thead>
        <tbody>
        <?php
        foreach ($users as $user ) {?>
        <tr>
        <td><?= $user->name?> </td>
        <td><?= $user->surname?> </td>
        <td><?= $user->email?> </td>
        <td><?= $user->birthdate?> </td>
        </tr>
        <?php } 
        ?>
            <?php foreach($users as $user) {?>
                <tr>
                <td><?= $user->name ?></td>
                <td><?= $user->surname ?></td>
                <td><?= $user->email ?></td>
                <td><?= $user->birthdate ?></td>
                </tr>
            <?php } ?>            
        </tbody>
    </table>
    <?php include('../views/parts/footer.php') ?>
</body>
</html>