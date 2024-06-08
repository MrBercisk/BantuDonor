<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Models\RsModel;

class ProfilAdmin extends BaseController
{
    protected $encrypter;
    protected $form_validation;
    protected $user;
    protected $rs;
    protected $session;

    public function __construct()
    {
        $this->encrypter = \Config\Services::encrypter();
        $this->form_validation =  \Config\Services::validation();
        $this->session = \Config\Services::session();
        $this->user = new UserModel();
        $this->rs = new RsModel();
    }
    public function index()
    {
        if (!$this->session->has('nama') || !$this->session->has('email')) {
            return redirect()->to(base_url('login'));
        }
        $data = [
            'nama' => $this->session->get('nama'),
            'email' =>   $this->session->get('email'),
            'rs' => $this->user->getUserData(), 
            'title' =>   "Bantu Donor - Profil"
        ];
        return view('admin/profil', $data);
    }
}
