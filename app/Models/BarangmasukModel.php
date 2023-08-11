<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangMasukModel extends Model
{
  protected $table = 'barangmasuk';
  protected $primaryKey = 'id';
  protected $allowedFields = [
    'nama',
    'jumlah',
    'tipe',
  ];
}
