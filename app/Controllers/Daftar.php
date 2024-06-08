<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\RsModel;

class Daftar extends BaseController
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
        $data = [
            'title' => 'Bantu Donor - Daftar Akun',
            'rs' => $this->rs->findAll()
        ];
        return view('login/daftar', $data);
    }

    public function create()
    {
        /* cek validasi */
        $validasi = $this->form_validation->run($this->request->getPost(), 'login');
        if (!$this->validate('daftar')) {
            $this->session->setFlashdata('sweet_alert', json_encode(['error' => true, 'message' => 'Gagal daftar akun']));
            return redirect()->to(base_url('daftar'))->withInput()->with('validation', $validasi);
        }

        /* jika lolos validasi */
        $password = $this->request->getVar('password');

        /* encrypt password */
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $data = [
            'role_id' => 2,
            'rs_id' => $this->request->getVar('rs_id'),
            'nama' => $this->request->getVar('nama'),
            'email' => $this->request->getVar('email'),
            'password' => $hash
        ];

        $user = $this->user->insert($data);
        if ($user) {
            $this->session->setFlashdata('sweet_alert', json_encode(['success' => true, 'message' => 'Pendaftaran berhasil!']));
            return redirect()->to(base_url('login'));
        }
    }
}
