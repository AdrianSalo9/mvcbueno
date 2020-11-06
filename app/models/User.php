<?php
<<<<<<< HEAD

=======
>>>>>>> 62b8c03e55cd2f68a836422cbaabcada3e6ef835
namespace App\Models;

use PDO;
use PDOException;

class User
{
    public function __construct()
    {
<<<<<<< HEAD
        #code...
=======
        # code...
>>>>>>> 62b8c03e55cd2f68a836422cbaabcada3e6ef835
    }

    public static function all()
    {
<<<<<<< HEAD
        $db= User::db();
        $statement = $db->query('SELECT * FROM users');
        $users = $statement->fetchAll(PDO::FETCH_CLASS, User::class);

        return $users;

=======
        $db = User::db();
        $statement = $db->query('SELECT * FROM users');
        $users = $statement->fetchAll(PDO::FETCH_CLASS, User::class);

        return $users;        
>>>>>>> 62b8c03e55cd2f68a836422cbaabcada3e6ef835
    }

    protected static function db()
    {
        $dsn = 'mysql:dbname=mvc;host=db';
        $usuario = 'root';
        $contraseña = 'password';
        try {
            $db = new PDO($dsn, $usuario, $contraseña);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Falló la conexión: ' . $e->getMessage();
        }
        return $db;
    }
}
