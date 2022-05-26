<?php

class User{
    public $nickname;
    public $name;
    public $lastname;
    public $email;
    public $tel_number;
    public $address;
    public $payment;
    public $payment_expired;
    function __construct(String $nickname, String $name, String $lastname, String $email, Int $tel_number, String $address, String $payment, Bool $payment_expired)
    {
        $this->nickname = $nickname;
        $this->name = $name;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->tel_number = $tel_number;
        $this->address = $address;
        $this->payment = $payment;
        $this->payment_expired = $payment_expired;
    }

}