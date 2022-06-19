<?php

namespace App\Models;

use CodeIgniter\Model;

class CvModel extends Model
{
    protected $table = 'cv';
    protected $allowedFields = [
        'pendidikan',
        'sertifikat_1',
        'sertifikat_2',
        'sertifikat_3'
    ];

    public function getCv($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
