<?php

namespace blog;

class Admin extends Blog
{
    public string $email;
    public string $password;

    public function __construct()
    {
        $this->email = "admin@gmail.com";
        $this->password = "admin";
    }
    public function getadmin()
    {
        return ["email" => $this->email, "password" => $this->password];
    }
}
