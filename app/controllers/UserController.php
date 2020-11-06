<?php
namespace App\Controllers;

<<<<<<< HEAD
use App\Models\User;
require_once('../app/models/User.php');
=======
require_once('../app/models/User.php');
use \App\Models\User;
>>>>>>> 62b8c03e55cd2f68a836422cbaabcada3e6ef835

class UserController  
{
    public function __construct()
    {
        echo "en UserController<br>";
    }

    public function index()
    {
        echo "En método index<br>";

        //buscar la lista de usuarios
<<<<<<< HEAD
        $users= User::all(); //arriba pongo use
        echo "<pre>";
        //print_r($users);
=======
        $users = User::all(); //arriba pongo use ...
        // $users = \App\Models\User::all();
        // echo "<pre>";
        // print_r($users);
>>>>>>> 62b8c03e55cd2f68a836422cbaabcada3e6ef835
        //generar la vista
        include('../views/user/index.php');
    }
    
    public function show($arguments)
    {
        $id = $arguments[0];
        echo "Mostrar el usuario $id";        
    }
    
    public function delete($arguments)
    {
        $id = $arguments[0];
        echo "Borrar el usuario $id";        
    }
}
