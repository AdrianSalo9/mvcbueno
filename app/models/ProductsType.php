<?php
namespace App\Models;

use Core\Model;
use PDO;

require_once '../core/Model.php';
class ProductsType  extends Model
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
}


