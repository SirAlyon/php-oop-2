<?php 

trait first_trait {
    public function dump($something) {
        var_dump($this->$something);
    }
    public function getFullInfo($v1, $v2, $v3)
    {
        var_dump($this->$v1, $this->$v2, $this->$v3);
    }

    public function checkUser($user)
    {
        //var_dump('im working :)');
        if (!$user || gettype($user) != 'object'){
            throw new InvalidArgumentException('user is null or not an object');
        }
    }
}
