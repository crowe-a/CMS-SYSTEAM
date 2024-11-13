<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Login extends Controller
{
    public function login()
    {
        return view('pages/login');  // login.php dosyasını yükle
    }

    public function authenticate()
    {
        $model = new UserModel();
        
        // Kullanıcı adı ve şifreyi al
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
    
        // Kullanıcıyı veritabanından al
        $user = $model->where('username', $username)->first();
    
        if ($user && password_verify($password, $user['password'])) {
            // Giriş başarılıysa, kullanıcının rolünü session'a kaydet
            session()->set([
                'username' => $user['username'],
                'role' => $user['role'],
                'loggedIn' => true
            ]);
            
            return redirect()->to('/');
        } else {
            // Giriş başarısızsa
            return redirect()->back()->with('message', 'Geçersiz kullanıcı adı veya şifre');
        }
    }
    


    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }


 

}
