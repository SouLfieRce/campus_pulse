<?php
class App{
    protected $db;

    public function __construct()
    {
        global $db;
        $this->db = $db;
    }


    public function verify()
    {
        
    }
}
?>