<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\StrictRules\CreditCardRules;
use CodeIgniter\Validation\StrictRules\FileRules;
use CodeIgniter\Validation\StrictRules\FormatRules;
use CodeIgniter\Validation\StrictRules\Rules;

class Validation extends BaseConfig
{
    // --------------------------------------------------------------------
    // Setup
    // --------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public array $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public array $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    // --------------------------------------------------------------------
    // Rules
    // --------------------------------------------------------------------
    public $daftar = [
        'nama' => [
            'label'  => 'Nama Lengkap',
            'rules'  => 'required|is_unique[user.nama]',
            'errors' => [
                'required' => 'Nama Lengkap Tidak Boleh Kosong!',
                'is_unique' => 'Nama Sudah Terdaftar!'
            ]
        ],
        'rs_id' => [
            'label'  => 'Rumah Sakit',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Rumah Sakit Tidak Boleh Kosong!',
            ]
        ],
        'email' => [
            'label'  => 'Email',
            'rules'  => 'required|valid_email|is_unique[user.email]',
            'errors' => [
                'required' => 'Email Tidak Boleh Kosong!',
                'valid_email' => 'Email Tidak Valid!',
                'is_unique' => 'Email Sudah Terdaftar!'
            ]
        ],
       
        'password' => [
            'label'  => 'Password',
            'rules'  => 'required|min_length[8]',
            'errors' => [
                'required' => 'Password Tidak Boleh Kosong!',
                'min_length' => 'Password Minimal 8 Karakter!'
            ]
        ],
        'confirm_password' => [
            'label'  => 'Confirm Password',
            'rules'  => 'required|min_length[8]|matches[password]',
            'errors' => [
                'required' => 'Confirm Password Tidak Boleh Kosong!',
                'min_length' => 'Confirm Password Minimal 8 Karakter!',
                'matches' => 'Confirm Password Tidak Sama Dengan Password!',
            ]
        ]
    ];
    public $login = [
        'email' => [
            'label'  => 'Email',
            'rules'  => 'required|valid_email',
            'errors' => [
                'required' => 'Email Tidak Boleh Kosong!',
                'valid_email' => 'Email Tidak Valid!'
            ]
        ],
        'password' => [
            'label'  => 'Password',
            'rules'  => 'required|min_length[8]',
            'errors' => [
                'required' => 'Password Tidak Boleh Kosong!',
                'min_length' => 'Password Minimal 8 Karakter!'
            ]
        ],
    ];
    public $datars = [
        'nama_rs' => [
            'label'  => 'Nama RS',
            'rules'  => 'required|is_unique[rumahsakit.nama_rs]',
            'errors' => [
                'required' => 'Nama Rumah Sakit Tidak Boleh Kosong!',
                'is_unique' => 'Nama Rumah Sakit Sudah Ada!'
            ]
        ],
        'alamat' => [
            'label'  => 'Alamat',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Password Tidak Boleh Kosong!',
            ]
        ],
        'no_telp' => [
            'label'  => 'No Telp',
            'rules'  => 'required|numeric',
            'errors' => [
                'required' => 'Password Tidak Boleh Kosong!',
                'numeric' => 'Hanya bisa diisi angka!',
            ]
        ],
        'email' => [
            'label'  => 'Email',
            'rules'  => 'required|valid_email|is_unique[rumahsakit.email]',
            'errors' => [
                'required' => 'Email Tidak Boleh Kosong!',
                'valid_email' => 'Email Tidak Valid!',
                'is_unique' => 'Email Sudah Terdaftar!'
            ]
        ],
    ];
    public $datapendonor = [
        'tanggal' => [
            'label'  => 'Tanggal Donor',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Tanggal Donor Tidak Boleh Kosong!',
            ]
        ],
        'nama' => [
            'label'  => 'Nama Lengkap',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Nama Lengkap Tidak Boleh Kosong!',
            ]
        ],
        'no_id' => [
            'label'  => 'No ID',
            'rules'  => 'required|numeric',
            'errors' => [
                'required' => 'No ID Tidak Boleh Kosong!',
                'numeric' => 'Hanya bisa diisi angka!',
            ]
        ],
        'no_telp' => [
            'label'  => 'No Telp',
            'rules'  => 'required|numeric',
            'errors' => [
                'required' => 'No Telp Tidak Boleh Kosong!',
                'numeric' => 'Hanya bisa diisi angka!',
            ]
        ],
        'goldar_id' => [
            'label'  => 'Golongan Darah',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Silahkan pilih golongan darah!',
            ]
        ],
        'rs_id' => [
            'label'  => 'Rumah Sakit',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Silahkan pilih lokasi donor!',
            ]
        ],
    ];
}
