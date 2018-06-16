<?php
require_once 'paritals/header.php';
require_once 'paritals/nav.php';


use Eli\Db as DB;
use ElCont\UploadController as Image;


    if(isset($_FILES['profile_img'])){

        $dbh = new DB();
        $connect = $dbh->connect();
        $image = new Image($connect);

        $filename = $_FILES["profile_img"]["name"];
        $realname = "public/uploads/" . basename($filename);
        $directory = $_SERVER['DOCUMENT_ROOT'] . "/public/uploads/";

        $path = $directory . basename($filename);

        $image_name = $_POST['image_name'];


        if($image->upload_image($realname, $image_name)){

            move_uploaded_file($_FILES["profile_img"]["tmp_name"], $path);

            $owl = $image->get_image();

            
        }


}?>

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-4 p-5 ">
            <h1>Upload Image</h1>
<!--             <img src="<?php echo $owl;?>" width="250" height="250" alt=""> -->
            <form action="" enctype="multipart/form-data" method="post">
                <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <input type="file" name="profile_img" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                    <input type="text" name="image_name" placeholder="Enter Name Of File" class="mt-3">
                    <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                
            </form>
        </div>
    </div>

<div class="row p-5">
<?php

$dbh = new DB();
$connect = $dbh->connect();
$image = new Image($connect);

$photo =  $image->get_images();
foreach($photo as $pic)

{?>

   
            <div class="col-md-4">
              <h1><?php echo $pic['image_name'];?></h1>
                <img src="<?php echo $pic['img'];?>" width="300" height="400">
                
            </div>
 

<?php }?>
       </div>
    </div>
</div>
<?php require_once  'paritals/footer.php';?>