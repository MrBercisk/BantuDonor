<?php

namespace App\Controllers;
use App\Models\PendonorModel;
use App\Models\RsModel;
use App\Models\GoldarModel;
use App\Models\UserModel;

class DashboardRs extends BaseController
{
    protected $encrypter;
    protected $form_validation;
    protected $pendonor;
    protected $rs;
    protected $goldar;
    protected $user;
    protected $session;

    public function __construct()
    {
        $this->encrypter = \Config\Services::encrypter();
        $this->form_validation =  \Config\Services::validation();
        $this->session = \Config\Services::session();
        $this->pendonor = new PendonorModel();
        $this->rs = new RsModel();
        $this->goldar = new GoldarModel();
        $this->user = new UserModel();
    }
    public function index()
    {
        if (!$this->session->has('nama') || !$this->session->has('email')) {
            return redirect()->to(base_url('login'));
        }
        $pendonorData = $this->pendonor->getDonorData();

        $totalPendonor = count($pendonorData);
    
        $data = [
            'title' => "Bantu Donor - Dashboard Rumah Sakit",
            'pendonor' => $pendonorData,
            'rs' => $this->rs->findAll(),
            'goldar' => $this->goldar->findAll(),
            'nama' => $this->session->get('nama'), 
            'total_pendonor' => $totalPendonor, 
        ];
        return view('rs/dashboard', $data);
    }
}
