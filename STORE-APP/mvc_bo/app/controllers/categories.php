<?php
class Categories extends Controller
{

    public function show()
    {
        $this->view('categories/show_categories');
    }

    public function add()
    {
        $this->view('categories/add_category');
    }

}