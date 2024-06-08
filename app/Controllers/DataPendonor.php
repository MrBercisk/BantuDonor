<?php

namespace App\Controllers;

use App\Models\PendonorModel;
use App\Models\RsModel;
use App\Models\GoldarModel;

class DataPendonor extends BaseController
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
            'title' => "Bantu Donor - Data Pendonor",
            'nama' => $this->session->get('nama'),
            'email' => $this->session->get('email'),
            'pendonor' => $this->pendonor->getDonorData(),
            'rs' => $this->rs->findAll(),
            'goldar' => $this->goldar->findAll(),
        ];
        return view('admin/pendonor', $data);
    }

    public function show($id = null)
    {
        if (!$this->session->has('nama') || !$this->session->has('email')) {
            return redirect()->to(base_url('login'));
        }
        $datadonor = $this->pendonor->find($id);

        if (!$datadonor) {
            $this->session->setFlashdata('sweet_alert', json_encode(['error' => true, 'message' => 'Data tidak ada!']));
            return redirect()->to(base_url('datapendonor'));
        }
        $data = [
            'nama' => $this->session->get('nama'),
            'email' => $this->session->get('email'),
            'title' => 'Bantu Donor - Edit Data Donor',
            'rs' => $this->rs->findAll(),
            'goldar' => $this->goldar->findAll(),
            'datadonor' => $datadonor
        ];
        return view('admin/editdonor', $data);
    }

    public function create()
    {
        $validasi = $this->form_validation->run($this->request->getPost(), 'datapendonor');
        if (!$this->validate('datapendonor')) {
            $this->session->setFlashdata('sweet_alert', json_encode(['error' => true, 'message' => 'Gagal tambah data']));
            return redirect()->to(base_url('datapendonor'))->withInput()->with('validation', $validasi);
        }

        $data = [
            'tanggal' => $this->request->getVar('tanggal'),
            'nama' => $this->request->getVar('nama'),
            'no_id' => $this->request->getVar('no_id'),
            'no_telp' => $this->request->getVar('no_telp'),
            'goldar_id' => $this->request->getVar('goldar_id'),
            'rs_id' => $this->request->getVar('rs_id'),
        ];
        $pendonor = $this->pendonor->insert($data);
        if ($pendonor) {
            $this->session->setFlashdata('sweet_alert', json_encode(['success' => true, 'message' => 'Tambah Data berhasil!']));
            return redirect()->to(base_url('datapendonor'));
        }
    }
    public function update($id = null)
    {
        $validasi = $this->form_validation->run($this->request->getPost(), 'datapendonor');
        if (!$this->validate('datapendonor')) {
            $this->session->setFlashdata('sweet_alert', json_encode(['error' => true, 'message' => 'Gagal tambah data']));
            return redirect()->to(base_url('datapendonor'))->withInput()->with('validation', $validasi);
        }
        $datadonor = $this->pendonor->find($id);

        if (!$datadonor) {
            $this->session->setFlashdata('sweet_alert', json_encode(['error' => true, 'message' => 'Data tidak ada!']));
        }
        if ($datadonor) {
            $data = [
                'id' => $id,
                'tanggal' => $this->request->getVar('tanggal'),
                'nama' => $this->request->getVar('nama'),
                'no_id' => $this->request->getVar('no_id'),
                'no_telp' => $this->request->getVar('no_telp'),
                'goldar_id' => $this->request->getVar('goldar_id'),
                'rs_id' => $this->request->getVar('rs_id'),
                'keterangan' => $this->request->getVar('keterangan'),
            ];

            $updateDonor = $this->pendonor->save($data);

            if ($updateDonor) {
                $this->session->setFlashdata('sweet_alert', json_encode(['success' => true, 'message' => 'Update data berhasil!']));
                return redirect()->to(base_url('datapendonor'));
            } else {
                $this->session->setFlashdata('sweet_alert', json_encode(['error' => true, 'message' => 'Gagal update data']));
                return redirect()->to(base_url('datapendonor'));
            }
        }
    }
    public function delete($id = null)
    {
        $datapendonor = $this->pendonor->find($id);

        if (!$datapendonor) {
            $this->session->setFlashdata('sweet_alert', json_encode(['error' => true, 'message' => 'Data tidak ada!']));
            return redirect()->to(base_url('datapendonor'));
        }

        if ($this->pendonor->delete($id)) {
            $this->session->setFlashdata('sweet_alert', json_encode(['success' => true, 'message' => 'Berhasil hapus data']));
            return redirect()->to(base_url('datapendonor'));
        } else {
            $this->session->setFlashdata('sweet_alert', json_encode(['error' => true, 'message' => 'Gagal hapus data']));
            return redirect()->to(base_url('datapendonor'));
        }
    }
}
