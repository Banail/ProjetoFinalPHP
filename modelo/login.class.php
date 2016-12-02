<?php
class Login {
    private $login1;
    private $senha;
    
    public function __construct() {
    }
    public function __destruct() {
    }
    public function __get($name) {
        return $this->$name;
    }
    public function __set($name, $value) {
        $this->$name = $value;
    }
    
}//fecha classe
