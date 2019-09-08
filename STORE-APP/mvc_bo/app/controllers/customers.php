<?php
class Customers extends Controller
{

    public function show()
    {
        $this->view('customers/show_customers');
    }

    public function add()
    {
        $this->view('customers/add_customer');
    }

}