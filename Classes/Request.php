<?php

class Request
{
    public $id;
    public $userName;
    public $emailAdes;
    public $request;
    public $userId;
    public $date;
    public function __construct()
    {
        settype($this->id,'int');
        settype($this->userName,'string');
        settype($this->emailAdes,'string');
        settype($this->request,'string');
        settype($this->userId,'int');
        settype($this->date,'string');

    }
}