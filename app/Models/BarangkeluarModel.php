<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangKeluarModel extends Model
{
  protected $table = 'barangkeluar';
  protected $primaryKey = 'id';
  protected $allowedFields = [
    'nama',
    'transportasi',
    'kota',
  ];
}
