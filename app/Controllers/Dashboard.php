<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\PendonorModel;
use App\Models\RsModel;
use App\Models\GoldarModel;
use Config\Services;

class Dashboard extends BaseController
{
    protected $encrypter;
    protected $form_validation;
    protected $user;
    protected $pendonor;
    protected $rs;

    protected $goldar;
    protected $session;
    protected $request;

    public function __construct()
    {
        $this->encrypter = \Config\Services::encrypter();
        $this->form_validation =  \Config\Services::validation();
        $this->user = new UserModel();
        $this->pendonor = new PendonorModel();
        $this->rs = new RsModel();
        $this->goldar = new GoldarModel();
        $this->session = \Config\Services::session();
        $this->request = Services::request();
    }


    public function index()
    {
        /* cek session jika tidak ada kembalikan ke login */
        if (!$this->session->has('nama') || !$this->session->has('email')) {
            return redirect()->to(base_url('login'));
        }
        $pendonorData = $this->pendonor->getDonorData();
        $rsData = $this->rs->findAll();

        $totalPendonor = count($pendonorData);
        $totalRS = count($rsData);
        $data = [
            'nama' => $this->session->get('nama'),
            'email' => $this->session->get('email'),
            'title' =>  "Bantu Donor - Dashboard",
            'total_pendonor' => $totalPendonor,
            'total_rs' => $totalRS,
        ];
        return view('admin/dashboard', $data);
    }
}
