<?php

namespace ElCont;

use Eli\Db as DB;
use PDO;
use EliModel\Image as Image;
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

        $image = Image::create(['img' => $filename, 'image_name' => $image_name]);
        return $image; 
  

    }

    public function get_image()
    {
        return $this->uploadfile;
    }


    public function get_images()
    {
        // try{
        //     $sql = "SELECT * FROM images";
        //     $sth = $this->connect->prepare($sql);
        //     $sth->execute();
        //     $result = $sth->fetchAll();
        //     return $result;

        // }
        // catch(PDOExeception $e)
        // {
        //     echo $e->getMessage();
        // }

        $images = Image::all(); 
        return $images;
    }



}