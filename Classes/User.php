<?php

class User
{
    public $id;
    public $name;
    public $email;
    public $password;
    public $role;
    public $gender;

    function __construct(){
        settype($this->id,'integer');
        settype($this->name,'string');
        settype($this->email, 'string');
        settype($this->password, 'string');
        settype($this->role, 'string');
        settype($this->gender, 'string');
    }
}