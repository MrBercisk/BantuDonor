<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
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
        $data['title'] = "Donor Darah - Login ";
        return view('login/index', $data);
    }

    public function create()
    {
        /* cek validasi */
        $validasi = $this->form_validation->run($this->request->getPost(), 'login');
        if (!$this->validate('login')) {
            $this->session->setFlashdata('sweet_alert', json_encode(['error' => true, 'message' => 'Anda gagal login']));
            return redirect()->to(base_url('login'))->withInput()->with('validation', $validasi);
        }

        /* jika lolos validasi */
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        /* Get data user berdasarkan email */
        $user = $this->user->where('email', $email)->first();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                /* Password benar */
                $data = [
                    'id' => $user['id'],
                    'role_id' => $user['role_id'],
                    'nama' => $user['nama'],
                    'email' => $user['email'],
                ];
                $this->session->set($data);

                if (isset($user['role_id'])) {
                    if ($user['role_id'] == 1) {
                        $this->session->setFlashdata('sweet_alert', json_encode(['success' => true, 'message' => 'Selamat Datang, ' . $user['nama']]));
                        return redirect()->to(base_url('dashboard'));
                    } else {
                        $this->session->setFlashdata('sweet_alert', json_encode(['success' => true, 'message' => 'Selamat Datang, ' . $user['nama']]));
                        return redirect()->to(base_url('dashboardrs'));
                    }
                }
            } else {
                /* password salah */
                $this->session->setFlashdata('sweet_alert', json_encode(['error' => true, 'message' => 'Password Salah ']));
                return redirect()->to(base_url('login'));
            }
        }
        /* User email tidak ada */ 
        else {
            $this->session->setFlashdata('sweet_alert', json_encode(['error' => true, 'message' => 'Email tidak terdaftar']));
            return redirect()->to(base_url('login'));
        }
    }
    public function logout()
	{
		$this->session->destroy();
		return redirect()->to('login');
	}
}
