<?php

class User
{
    public $nickname;
    public $name;
    public $lastname;
    public $email;
    public $tel_number;
    public $address;
    public $card_number;
    public $card_expire;
    public $payment_expired;
    function __construct(String $nickname, String $name, String $lastname, String $email, Int $tel_number, String $address, Int $card_number, String $card_expire, Int $cvv, Bool $payment_expired)
    {
        $this->nickname = $nickname;
        $this->name = $name;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->tel_number = $tel_number;
        $this->address = $address;
        $this->card_number = $card_number;
        $this->card_expire = $card_expire;
        $this->cvv = $cvv;
        $this->payment_expired = $payment_expired;
    }

    public function setPaymentExpired()
    {   
        $month = intval(substr($this->card_expire, 0, -3));
        $year = intval(substr($this->card_expire, -2));
        $actual_month = intval(date("m"));
        $actual_year = intval(substr((date("Y")), -2));
        //var_dump($month, $year);
        //var_dump($actual_month, $actual_year);
        //var_dump($year, $actual_year, $month, $actual_month);
        if ($year > $actual_year) {
            $this->payment_expired = false;
            var_dump('Payment Ok');
        }elseif ($year === $actual_year && $month > $actual_month){
            $this->payment_expired = false;
            var_dump('Payment Ok');
        }else{
            $this->payment_expired = true;
           var_dump('Payment expired');
        }
    }
}
