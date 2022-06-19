<?php

namespace App\Controllers;

use App\Models\CvModel;
use CodeIgniter\CodeIgniter;
use Config\App;
use Kint\Renderer\RichRenderer;

class Pages extends BaseController
{
    protected $cvModel;

    public function __construct()
    {
        $this->cvModel = new CvModel();
    }

    public function index()
    {
        $cv = $this->cvModel->getCv();
        $data = [
            'title' => 'My CV - Fitrah Saputra',
            'cv' => $cv
        ];
        return view('pages/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Add Data',
            'validation' => \Config\Services::validation()
        ];

        return view('pages/create', $data);
    }

    public function save()
    {
        // validasi input
        if (!$this->validate([
            'pendidikan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama {field} harus diisi !'
                ]
            ],
            'waktu_pendidikan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Waktu pendidikan harus diisi !'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('pages/create')->withInput()->with('validation', $validation);
        }

        $this->cvModel->save([
            'pendidikan' => $this->request->getVar('pendidikan'),
            'waktu_pendidikan' => $this->request->getVar('waktu_pendidikan'),
            'sertifikat_1' => $this->request->getVar('sertifikat_1'),
            'sertifikat_2' => $this->request->getVar('sertifikat_2'),
            'sertifikat_3' => $this->request->getVar('sertifikat_3')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');

        return redirect()->to('pages');
    }

    // public function delete($id)
    // {
    //     $this->cvModel->delete($id);
    //     session()->setFlashdata('pesan', 'Data berhasil dihapus');
    //     return redirect()->to('pages');
    // }

    // public function edit($id)
    // {
    //     $data = [
    //         'title' => 'Edit Data',
    //         'validation' => \Config\Services::validation(),
    //         'cv' => $this->cvModel->getCv($id)
    //     ];

    //     return view('pages/edit', $data);
    // }

    // public function update($id)
    // {
    //     // validasi input
    //     if (!$this->validate([
    //         'pendidikan' => [
    //             'rules' => 'required',
    //             'errors' => [
    //                 'required' => 'Nama {field} harus diisi !'
    //             ]
    //         ],
    //         'waktu_pendidikan' => [
    //             'rules' => 'required',
    //             'errors' => [
    //                 'required' => 'Waktu pendidikan harus diisi !'
    //             ]
    //         ]
    //     ])) {
    //         $validation = \Config\Services::validation();
    //         return redirect()->to('pages/edit/' . $this->request->getVar('id'))->withInput()->with('validation', $validation);
    //     }

    //     $this->cvModel->save([
    //         'id' => $id,
    //         'pendidikan' => $this->request->getVar('pendidikan'),
    //         'waktu_pendidikan' => $this->request->getVar('waktu_pendidikan'),
    //         'sertifikat_1' => $this->request->getVar('sertifikat_1'),
    //         'sertifikat_2' => $this->request->getVar('sertifikat_2'),
    //         'sertifikat_3' => $this->request->getVar('sertifikat_3')
    //     ]);

    //     session()->setFlashdata('pesan', 'Data berhasil diubah');

    //     return redirect()->to('pages');
    // }
}
