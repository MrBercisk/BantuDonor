<?php

namespace App\Controllers;
use App\Models\UserModel;

class Profil extends BaseController
{
    protected $encrypter;
    protected $form_validation;
    protected $user;
    protected $session;

    public function __construct()
    {
        $this->encrypter = \Config\Services::encrypter();
        $this->form_validation =  \Config\Services::validation();
        $this->session = \Config\Services::session();
        $this->user = new UserModel();
    }
    public function index()
    {
        if (!$this->session->has('nama') || !$this->session->has('email')) {
            return redirect()->to(base_url('login'));
        }
        $data = [
            'nama' => $this->session->get('nama'),
            'email' =>   $this->session->get('email'),
            'title' =>   "Bantu Donor - Profil"
        ];
        return view('rs/profil', $data);
    }
}
