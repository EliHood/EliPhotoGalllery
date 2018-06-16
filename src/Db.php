<?php

namespace Eli;
use PDO;

use Eli\Config as Config;

class Db  {

    private $dbh;
    private $config;

    public function __construct(){
        $this->config =  new Config();
        try{
            $this->dbh = new PDO("mysql:host=" . $this->config->host() . ";dbname=" .$this->config->db_name() .";port=".$this->config->db_port(),
                $this->config->db_username(), $this->config->db_password());
            $this->dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        }



        catch (\Exception $e)
        {
            exit("Error: " . $e->getMessage());
        }

    }

    public function connect()
    {
        return $this->dbh;
    }


}


