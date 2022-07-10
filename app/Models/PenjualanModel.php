<?php

namespace App\Models;

use CodeIgniter\Model;

class PenjualanModel extends Model
{
    protected $table = 'lap-penjualan';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'nama_barang', 'harga_beli', 'jumlah'];
}