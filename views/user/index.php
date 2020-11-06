<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC</title>
</head>
<body>
<<<<<<< HEAD
    <h1>Lista de usuarios </h1>
    <table>
        <thead>
            <tr>
            <th>nombre</th>
            <th>apellido</th>
            <th>email</th>
=======
    <h1>Lista de usuarios  </h1>

    <table>
        <thead>
            <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
>>>>>>> 62b8c03e55cd2f68a836422cbaabcada3e6ef835
            <th>F. Nacimiento</th>
            </tr>
        </thead>
        <tbody>
<<<<<<< HEAD
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
=======
            <?php foreach($users as $user) {?>
                <tr>
                <td><?= $user->name ?></td>
                <td><?= $user->surname ?></td>
                <td><?= $user->email ?></td>
                <td><?= $user->birthdate ?></td>
                </tr>
            <?php } ?>            
>>>>>>> 62b8c03e55cd2f68a836422cbaabcada3e6ef835
        </tbody>
    </table>
</body>
</html>