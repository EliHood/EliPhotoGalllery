<?php

namespace ElCont;

use Eli\Db as DB;

use \Eli\View as View;

class BaseController {

    private $db;
    private $connection;


    public function __construct()
    {
        $this->db = new DB;
        $this->connection = $this->db->connect();

    }


    public function getHome()
	{
		$view = new View;
		return $view->render('home');
	}









}