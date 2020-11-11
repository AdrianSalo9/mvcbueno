<?php
namespace App\Controllers;
use App\Models\ProductsType;
require_once('../app/models/ProductsType.php'); 

class ProducttypeController 
{
    public function __construct()
    {
            echo "En product type Controller <br>";
    }
    public function index()
    {
        $productos=ProductsType::all();
        echo "<pre>";
        include('../views/user/productsType.php');
    }
}



