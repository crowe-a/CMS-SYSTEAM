<?php
namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Register extends Controller
{
    public function index()
    {
        return view('pages/register');  // Kayıt formu sayfasını döndürüyoruz
    }

    public function store()
    {
        $model = new UserModel();
    
        // Kullanıcı verilerini al
        $data = [
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'role' => 'user', // Varsayılan olarak kullanıcı rolü, admin için 'admin' atanabilir
        ];
    
        // Kullanıcıyı veritabanına ekle
        if ($model->insert($data)) {
            session()->set([
                'username' => $data['username'],
                'role' => $data['role'], // Rolü session'a kaydet
                'loggedIn' => true,
            ]);
    
            return redirect()->to('/')->with('message', 'Kayıt başarılı, otomatik olarak giriş yapıldı.');
        } else {
            return redirect()->back()->withInput()->with('message', 'Kayıt başarısız, lütfen tekrar deneyin.');
        }
    }

    
    
}
