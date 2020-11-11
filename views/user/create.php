<?php include('../views/parts/head.php') ?>
<?php include('../views/parts/header.php') ?>
<main role="main" class="container">
    <h1>Alta de usuario</h1>

    <form action="/user/store" method="POST">
        <div class="form-group">
            <label for="name">Nombre:</label>
            <input class="form-control" type="text" name="name">
        </div>
        <div class="form-group">
            <label for="name">Apellidos:</label>
            <input class="form-control" type="text" name="surname">
        </div>
        <div class="form-group">
            <label for="name">Email:</label>
            <input class="form-control" type="text" name="email">
        </div>
        <div class="form-group">
            <label for="name">Fecha de nacimiento:</label>
            <input class="form-control" type="text" name="birthdate">
        </div>
        <div class="form-group">
            <input class="form-control" type="submit">
        </div>
    </form>
</main>