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

        $sql = "INSERT INTO images (img, image_name) VALUES (?, ?)";
        $stmt = $this->connect->prepare($sql)->execute([$filename, $image_name]);
        return $stmt; 
  

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