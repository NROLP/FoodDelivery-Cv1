<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class LoginController extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index() //DISPLAY LOGIN FORM
    {
        return view('Login');
    }

    public function loginVerify() //LOGIN LOGIC
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $this->userModel->getUserByUsername($username);

        if ($user && $this->userModel->verifyPassword($password, $user['password'])) {
            return redirect()->to(site_url('dashboard'));
        }
        session()->setFlashdata('error', 'Invalid username or password.');
        return redirect()->to(site_url('index'));
    }

    public function register() //DISPLAY LOGIN FORM
    {
        return view('register_page');
    }

    public function registerStep() //REGISTER NEW USER lOGIC
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $confirmPassword = $this->request->getPost('confirm_password');
        
        if ($password !== $confirmPassword) {
            session()->setFlashdata('error', 'Passwords do not match.');
            return redirect()->to(site_url('register'));
        }
        
        $Data = [
            'username' => $username,
            'password' => $password,
        ];
        
        $this->userModel->insert($Data);
        session()->setFlashdata('success', 'Registration successful.');
        return redirect()->to(site_url('index'));
    }
}
