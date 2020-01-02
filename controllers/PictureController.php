<?php
require '../models/Artwork.php';
require '../views/PictureView.php';
require_once '../views/RedirectView.php';
require '../views/MasterpiecesView.php';
require_once '../Alert.php';




class PictureController {
    public function view(){
        return new PictureView;
    }

    public function add(){
        $target_dir = "../web/images/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;

        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                // echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                Alert::warninig(   "File is not an image."   );
                $uploadOk = 0;
            }
        }

        if (file_exists($target_file)) {
            Alert::warninig("Sorry, file already exists.");
            $uploadOk = 0;
            die();
        } 

        if ($_FILES["fileToUpload"]["size"] > 100000000) {
            Alert::warninig("Sorry, your file is too large.");
            $uploadOk = 0;
            die();
        }

        if($imageFileType != "jpg" && $imageFileType != "png") {
            Alert::warninig("Sorry, only JPG & PNG files are allowed.");
            $uploadOk = 0;
            die();
        }

        if ($uploadOk == 0) {
            Alert::warninig("Sorry, your file was not uploaded.");
            die();
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                $author = $_POST['author'];
                $title = $_POST['title'];
                $watermark= $_POST['watermark'];
                $picture =basename( $_FILES["fileToUpload"]["name"]);

                $artwork = new Artwork($author,$title,$watermark,$picture);
                $artwork->save();
                $path = getcwd() . "/images/$picture";

                $thumbnailPath = getcwd() . "/thumb/{$picture}.png";
                $artwork->createThumb($path, $thumbnailPath, $imageFileType);

                $watermarkPath = getcwd() . "/wtrmrk/{$picture}.png";
                $artwork->watermark($path, $watermarkPath, $imageFileType, $watermark);

            } else {
                Alert::warninig("Sorry, there was an error uploading your file.");
            }
        }

        return new RedirectView('/masterpieces' , 303);
    }

    public function remove(){
        $trash = $_GET['fileToDelete'];
        $masterpieces = Artwork::getAll();
        foreach ($masterpieces as $artwork){
            if($artwork->picture == $trash){
                $artwork->delete();
            }
        }
        return new RedirectView('/masterpieces' , 303);
    }

    public function index(){
        $masterpieces = Artwork::getAll();

        return new MasterpiecesView($masterpieces);
    }
}
?>
