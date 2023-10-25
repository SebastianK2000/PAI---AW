<?php

require_once __DIR__.'/../../data.php';

class Repository {
    protected $database;

    public function __construct()
    {
        $this->database = new Database();
    }
}