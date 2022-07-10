<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table = 'etalase';
    protected $table2 = 'cart';
    protected $primaryKey = 'id';
    public function getAll()
    {
        return $this->findAll();
    }
    public function getCart($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
    public function getBarang($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
}