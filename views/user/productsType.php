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
    <h1>Lista de productos</h1>
    <?php
        foreach ($productos as $producto ) {?>
        <tr>
        <td><?= $producto->id?> <?= $producto->name?> </td>
        </tr>
        <?php } 
        ?>    
        <?php include('../views/parts/footer.php') ?>
</body>
</html>