<?php

namespace App\Models;

use PDO;
use PDOException;

class User
{
    public function __construct()
    {
        # code...
    }

    public static function all()
    {
        $db= User::db();
        $statement = $db->query('SELECT * FROM users');
        $users = $statement->fetchAll(PDO::FETCH_CLASS, User::class);

        return $users;

        $db = User::db();
        $statement = $db->query('SELECT * FROM users');
        $users = $statement->fetchAll(PDO::FETCH_CLASS, User::class);

        return $users;        
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
    public function insert()
    {
        $db = User::db();
        $statement=$db->prepare('INSERT INTO users(`name`,surname,email,birthdate) VALUES(:name, :surname, :email, :birthdate)');
        $data = (array(
            ':name'=>$this->name,
            ':surname'=>$this->surname,
            ':email'=>$this->email,
            ':birthdate'=>$this->birthdate
        ));
        return $statement->execute($data);
    }
    public function save()
    {
        $db = User::db();
        $statement=$db->prepare('UPDATE users SET(`name`=:name, `surname`= :surname, `email`=:email, `birthdate`=:birthdate) WHERE id=:id');
        $data = (array(
            ':name'=>$this->name,
            ':surname'=>$this->surname,
            ':email'=>$this->email,
            ':birthdate'=>$this->birthdate
        ));
        return $statement->execute($data);
    }
}
