<?php

namespace App\Controllers;
use App\Models\PendonorModel;
use App\Models\RsModel;
use App\Models\GoldarModel;


class DataStok extends BaseController
{
    protected $encrypter;
    protected $form_validation;
    protected $pendonor;
    protected $rs;
    protected $goldar;
    protected $session;

    public function __construct()
    {
        $this->encrypter = \Config\Services::encrypter();
        $this->form_validation =  \Config\Services::validation();
        $this->session = \Config\Services::session();
        $this->pendonor = new PendonorModel();
        $this->rs = new RsModel();
        $this->goldar = new GoldarModel();
    }
    public function index()
    {
        if (!$this->session->has('nama') || !$this->session->has('email')) {
            return redirect()->to(base_url('login'));
        }
        $data = [
            'title' => "Bantu Donor - Data Stok Darah",
            'nama' => $this->session->get('nama'),
            'email' => $this->session->get('email'),
            'pendonor' => $this->pendonor->getDonorData(),
            'stock' => $this->pendonor->hitungTotal(),
            'rs' => $this->rs->findAll(),
            'goldar' => $this->goldar->findAll(),
        ];
        return view('admin/stokdarah', $data);
    }
}
