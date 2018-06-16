<?php

namespace Eli;

class Config{

    public $settings = array(
        'DB_HOST'=>'127.0.0.1',
        'DB_USERNAME'=>'root',
        'DB_PASSWORD'=>'root',
        'DB_DATABASE'=>'elinew2',
        'DB_PORT' => '8889'

    );

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
