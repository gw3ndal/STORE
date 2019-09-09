<?php
class Logins extends Controller
{

    public function password()
    {
        $this->view('logins/forgot_password');
    }

    public function signin()
    {
        $this->view('logins/signin');
    }

    public function signup()
    {
        $this->view('logins/signup');
    }

}