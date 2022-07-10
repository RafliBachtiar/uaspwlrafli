<?php

namespace App\Controllers;

use App\Models\BarangModel;
use App\Models\CartModel;


class Pages extends BaseController
{
    protected $barangModel, $cartModel;
    public function __construct()
    {
        $this->barangModel = new BarangModel();
        $this->cartModel = new CartModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Home',
        ];
        return view('pages/index', $data);
    }

    public function product()
    {
        $barang = $this->barangModel->getAll();
        $data = [
            'title' => 'Product',
            'barang' => $barang,
        ];
        return view('pages/product', $data);
    }

    public function cart()
    {
        $cart = $this->cartModel->getCart();
        $data = [
            'title' => 'Cart',
            'cart' => $cart,
        ];
        return view('pages/cart', $data);
    }
}
