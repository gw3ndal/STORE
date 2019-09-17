<?php

class Home extends Controller
{
    public function index($id = 1)
    {
        $oneProduct = Product::find($id);
        $products = Product::all();
        $this->view('dashboard/dashboard', ['page_title' => 'Accueil']);
    }
}