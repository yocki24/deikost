<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\LoginModel;

class Login extends BaseController
{
    function __construct()
	{
		$this->LoginModel = new LoginModel();
	}
    public function index()
    {
        return view('Auth/Login');
    }
    public function cekUser(){
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $validation = \Config\Services::validation();

        $valid = $this->validate([
            'email' => [
                'label' => 'email',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
                ],
            'password' => [
                'label' => 'password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
                ],
            ]);

        if (!$valid) {
            $sessError = [
                'errEmail' => $validation->getError('email'),
                'errPassword' => $validation->getError('password')
            ];

            session()->setFlashdata($sessError);
            return redirect()->to(site_url('/'));
        } else {
            $cekUserLogin = $this->LoginModel->getLogin($email);
            if ($cekUserLogin == null) {
                $sessError = [
                    'errEmail' => 'Email tidak terdaftar',
                ];
    
                session()->setFlashdata($sessError);
                return redirect()->to(site_url('/'));
            } else {
                $passUser = $cekUserLogin['password'];
                // if (password_verify($password, $passUser)) {
                //     dd("pass cocok");
                // } else {
                //     $sessError = [
                //         'errPassword' => 'Password salah',
                //     ];
        
                //     session()->setFlashdata($sessError);
                //     return redirect()->to(site_url('/'));
                // }
                if ($password == $passUser) {
                    session()->set($cekUserLogin);
                    return redirect()->to('/home');
                } else {
                    $sessError = [
                        'errPassword' => 'Password salah',
                    ];
        
                    session()->setFlashdata($sessError);
                    return redirect()->to(site_url('/'));
                }
            }
        }
    }
    public function logout(){
        session()->destroy();
        return redirect('/');
    }
}