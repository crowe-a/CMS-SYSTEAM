<?php
namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class admin_control extends Controller
{
    public function product_list()
    {
        return view('pages/product_list');  // Kayıt formu sayfasını döndürüyoruz
    }
    public function product_management()
    {
        return view('pages/product_management');  // Kayıt formu sayfasını döndürüyoruz
    }
    public function order_management()
    {
        return view('pages/order_management');  // Kayıt formu sayfasını döndürüyoruz
    }
    public function user_management()
    {

        $userModel = new UserModel();
        $data['users'] = $userModel->getUsers(); 
        return view('pages/user_management',$data);  // Kayıt formu sayfasını döndürüyoruz
    }




    

    
    
}
