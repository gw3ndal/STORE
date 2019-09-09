<?php
class Home extends Controller
{
    public function index($name = null)
    {
        $user = $this->model('User');
        $user->name = $name;

        $this->view('dashboard/dashboard', ['name' => "Abdenour"]);
    }

}