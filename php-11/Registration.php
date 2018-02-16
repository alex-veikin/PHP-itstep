<?php

class Registration {
    private $login;
    private $email;
    private $password;
    private $password_confirm;


    public function __construct(Array $data) {
        $this->login = $data['login'];
        $this->email = $data['email'];
        $this->password = $data['password'];
        $this->password_confirm = $data['password_confirm'];
    }


    public function comparePassword() {
        return $this->password === $this->password_confirm;
    }

    public function validate() {
        return ($this->login && $this->email && $this->password && $this->password_confirm);
    }


    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }


    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }



}