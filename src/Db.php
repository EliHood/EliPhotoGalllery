<?php

namespace Eli;
use PDO;

use Eli\Config as Config;

use Illuminate\Database\Capsule\Manager as Capsule;

class Db  {

    private $dbh;
    private $config;
    private $capsule;
    private $settings;
    private $newsettings;
    private $connection;

    public function __construct(){

        $this->capsule = new Capsule;
        $this->settings = new Config();
        $this->newsettings = $this->settings->get_settings();


        $this->capsule->addConnection($this->newsettings);
        $this->capsule->setAsGlobal();
        $this->capsule->bootEloquent();


    }

    public function connect()
    {
        $this->connection = $this->capsule->getConnection();
        $this->connection->beginTransaction();
        return $this->connection;
    }


}


