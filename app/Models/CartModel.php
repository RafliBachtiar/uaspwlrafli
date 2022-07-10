<?php

namespace App\Models;

use CodeIgniter\Model;

class CartModel extends Model
{
    protected $table = 'cart';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'harga', 'jumlah'];
    public function add($data)
    {
        return $this->insert($data);
    }

    public function getCart()
    {
        return $this->findAll();
    }
    public function hapus($id)
    {
        return $this->where(['id_cart' => $id])->delete();
    }
}