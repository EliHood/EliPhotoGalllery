<?php

namespace ElCont;

use Eli\Db as DB;
use PDO;
use \Eli\View as View;

class UploadController {

    private $uploader;
    private $db;
    private $connect;
    public $directory;
    public $uploadfile;


    public function __construct($connect)
    {
        $this->db = new DB;
        $this->connect =  $connect;
        $this->directory = "public/uploads/";
    }


    public function upload_image($filename, $image_name)
    {

        $this->uploadfile = $this->directory . basename($filename);

        try{
            $sql = "INSERT INTO images (img, image_name) VALUES (?, ?)";
            $stmt = $this->connect->prepare($sql)->execute([$filename, $image_name]);
            return $stmt; 
        }
        catch(PDOExeception $e)
        {
            echo $e->getMessage();
        }


    }

    public function get_image()
    {
        return $this->uploadfile;
    }


    public function get_images()
    {
        try{
            $sql = "SELECT * FROM images";
            $sth = $this->connect->prepare($sql);
            $sth->execute();
            $result = $sth->fetchAll();
            return $result;

        }

        catch(PDOExeception $e)
        {
            echo $e->getMessage();
        }
    }



}