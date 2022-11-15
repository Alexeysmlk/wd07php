<?php


namespace App\Controller;


use App\Core\BaseController;
use App\Models\Product;

class CatalogController extends BaseController
{
    public function product($id){
        $product = Product::findById($id);
        $this->render("catalog/product.php");
    }
}