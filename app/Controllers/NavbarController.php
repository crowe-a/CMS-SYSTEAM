<?php

namespace App\Controllers;

use App\Models\ProductModel;

class NavbarController extends BaseController
{
    public function index()
    {
        $productModel = new ProductModel();
        $data['products'] = $productModel->getProductsByClass();

        return view('partials/nav', $data);
    }
}
