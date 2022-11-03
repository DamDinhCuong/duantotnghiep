<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function getIndex()
    {
        return View('web.index');
    }
    public function getContact()
    {
        return View('web.contact');
    }
    public function getAbout()
    {
        return View('web.about');
    }
    public function getCheckout()
    {
        return View('web.checkout');
    }
    public function getShop()
    {
        return View('web.shop');
    }
    public function getSingleNew()
    {
        return View('web.single_news');
    }
    public function getSingleProduct()
    {
        return View('web.single_product');
    }
    public function getCart()
    {
        return View('cart.cart');
    }
}
