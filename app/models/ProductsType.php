<?php
namespace App\Models;

use PDO;
use PDOException;

class ProductsType  
{
    public function __construct()
    {
        # code...
    }
    public static function all()
    {
        $db=ProductsType::db();
        $statment=$db->query('SELECT * FROM product_types');
        $productos= $statment -> fetchAll(PDO::FETCH_CLASS, ProductsType::class);
        return $productos;
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


