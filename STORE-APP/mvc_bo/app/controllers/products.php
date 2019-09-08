<?php
class Products extends Controller
{

    public function show($name = null)
    {
        $this->view('products/show_products');
    }

    public function add()
    {
        $this->view('products/add_product');
    }

}