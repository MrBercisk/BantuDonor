<?php

namespace App\Controllers;

use App\Models\RsModel;

class DataRs extends BaseController
{
    protected $encrypter;
    protected $form_validation;
    protected $rs;
    protected $session;

    public function __construct()
    {
        $this->encrypter = \Config\Services::encrypter();
        $this->form_validation =  \Config\Services::validation();
        $this->session = \Config\Services::session();
        $this->rs = new RsModel();
    }
    public function index()
    {
        if (!$this->session->has('nama') || !$this->session->has('email')) {
            return redirect()->to(base_url('login'));
        }
        $data = [
            'nama' => $this->session->get('nama'),
            'email' => $this->session->get('email'),
            'title' => 'Bantu Donor - Data Rumah Sakit',
            'rs' => $this->rs->findAll()
        ];
        return view('admin/rs', $data);
    }
    public function create()
    {
        $validasi = $this->form_validation->run($this->request->getPost(), 'datars');
        if (!$this->validate('datars')) {
            $this->session->setFlashdata('sweet_alert', json_encode(['error' => true, 'message' => 'Gagal tambah data']));
            return redirect()->to(base_url('datars'))->withInput()->with('validation', $validasi);
        }

        $data = [
            'nama_rs' => $this->request->getVar('nama_rs'),
            'alamat' => $this->request->getVar('alamat'),
            'no_telp' => $this->request->getVar('no_telp'),
            'email' => $this->request->getVar('email'),
        ];

        $datars = $this->rs->insert($data);

        if ($datars) {
            $this->session->setFlashdata('sweet_alert', json_encode(['success' => true, 'message' => 'Tambah Data berhasil!']));
            return redirect()->to(base_url('datars'));
        }
    }

    public function show($id = null)
    {
        if (!$this->session->has('nama') || !$this->session->has('email')) {
            return redirect()->to(base_url('login'));
        }
        $datars = $this->rs->find($id);

        if (!$datars) {
            $this->session->setFlashdata('sweet_alert', json_encode(['error' => true, 'message' => 'Data tidak ada!']));
            return redirect()->to(base_url('datars'));
        }
        $data = [
            'nama' => $this->session->get('nama'),
            'email' => $this->session->get('email'),
            'title' => 'Bantu Donor - Edit Rumah Sakit',
            'datars' => $datars
        ];

        return view('admin/editrs', $data);
    }

    public function update($id = null)
    {
        $datars = $this->rs->find($id);

        if (!$datars) {
            $this->session->setFlashdata('sweet_alert', json_encode(['error' => true, 'message' => 'Data tidak ada!']));
        }
        if ($datars) {
            $data = [
                'id' => $id,
                'nama_rs' => $this->request->getVar('nama_rs'),
                'alamat' => $this->request->getVar('alamat'),
                'no_telp' => $this->request->getVar('no_telp'),
                'email' => $this->request->getVar('email'),
            ];

            $updateRs = $this->rs->save($data);

            if ($updateRs) {
                $this->session->setFlashdata('sweet_alert', json_encode(['success' => true, 'message' => 'Update data berhasil!']));
                return redirect()->to(base_url('datars'));
            } else {
                $this->session->setFlashdata('sweet_alert', json_encode(['error' => true, 'message' => 'Gagal update data']));
                return redirect()->to(base_url('datars'));
            }
        }
    }
    public function delete($id = null)
    {
        $datars = $this->rs->find($id);

        if (!$datars) {
            $this->session->setFlashdata('sweet_alert', json_encode(['error' => true, 'message' => 'Data tidak ada!']));
            return redirect()->to(base_url('datars'));
        }

        if ($this->rs->delete($id)) {
            $this->session->setFlashdata('sweet_alert', json_encode(['success' => true, 'message' => 'Berhasil hapus data']));
            return redirect()->to(base_url('datars'));
        } else {
            $this->session->setFlashdata('sweet_alert', json_encode(['error' => true, 'message' => 'Gagal hapus data']));
            return redirect()->to(base_url('datars'));
        }
    }
}
