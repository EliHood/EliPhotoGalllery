<?php

namespace Eli;



class Config{

    public $settings = array(
            'driver'    => 'mysql',
            'port'      => '8889',
            'host'      => '127.0.0.1',
            'database'  => 'elinew2',
            'username'  => 'root',
            'password'  => 'root',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
    );


    public function get_settings()
    {
        return $this->settings;
    }

    public function host()
    {
        return $this->settings['DB_HOST'];

    }

    public function db_username()
    {
        return $this->settings['DB_USERNAME'];
    }

    public function db_password()
    {
        return $this->settings['DB_PASSWORD'];
    }

    public function db_name()
    {
        return $this->settings['DB_DATABASE'];
    }

    public function db_port()
    {
        return $this->settings['DB_PORT'];
    }


}
