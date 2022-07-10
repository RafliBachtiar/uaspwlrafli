<?php

namespace App\Controllers;

use App\Models\CartModel;
use App\Models\BarangModel;
use App\Models\PenjualanModel;

class Cart extends BaseController
{
    protected $cartModel, $barangModel, $penjualanModel;
    public function __construct()
    {
        $this->cartModel = new CartModel();
        $this->barangModel = new BarangModel();
        $this->penjualanModel = new PenjualanModel();
    }

    //add cart
    public function add($id = false)
    {
        // add to cart
        $barang = $this->barangModel->getBarang($id);
        $data = [
            'nama' => $barang['nm_brg'],
            'harga' => $barang['hrg_brg'],
            //get jumlah from input
            'jumlah' => +1,
        ];
        $this->cartModel->save($data);
        // dd($data);
        //allert
        session()->setFlashdata('success', 'Berhasil menambahkan ke cart');
        return redirect()->to('product');
    }


    //delete cart
    public function delete($id = false)
    {
        if ($id == false) {
            return redirect()->to('cart');
        }
        $this->cartModel->hapus($id);
        return redirect()->to('cart');
    }

    //update cart
    public function update($id = false)
    {
        if ($id == false) {
            return redirect()->to('/');
        }
        $barang = $this->barangModel->getBarang($id);
        $data = [
            'id_brg' => $barang['id'],
            'nm_brg' => $barang['nm_brg'],
            'hrg_brg' => $barang['hrg_brg'],
            'img' => $barang['img'],
        ];
        $this->cartModel->update($id, $data);
        return redirect()->to('/cart');
    }

    //checkout
    public function checkout()
    {
        $cart = $this->cartModel->getCart();
        foreach ($cart as $c) {
            $data = [
                'nama_barang' => $c['nama'],
                'harga_beli' => $c['harga'],
                'jumlah' => $c['jumlah'],
            ];
            $this->penjualanModel->insert($data);
            $this->cartModel->hapus($c['id_cart']);
        }
        return redirect()->to('cart');
    }
}
