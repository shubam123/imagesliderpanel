<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

//declare that we are using Imgapp model here
use App\Imgapp;


class FileUpload extends Controller
{

    // function for uplaod page
    public function index(){
    	return view('uploadFile');
    }


    // function to upload and show file details
    public function uploadFile(Request $request){

    	//$file =$request -> file('image');


        $fileName = $_FILES["image"]["name"]; // The file name
        $fileTmpLoc = $_FILES["image"]["tmp_name"]; // File in the PHP tmp folder
        $fileType = $_FILES["image"]["type"]; // The type of file it is
        $fileSize = $_FILES["image"]["size"]; // File size in bytes
        $fileErrorMsg = $_FILES["image"]["error"]; // 0 for false... and 1 for true
        $kaboom = explode(".", $fileName); // Split file name into an array using the dot
        $fileExt = strtolower(end($kaboom)); // Now target the last

        

            if(!$fileTmpLoc) { // if file not chosen
                    echo "ERROR: Please browse for a file before clicking the upload button.";
                    exit();
                }
                else if(!preg_match("/.(gif|jpg|png|swf|tiff|tif|jpeg)$/i", $fileName) ) {
                     // This condition is only if you wish to allow uploading of specific file types    
                     echo "ERROR: Your image was not .gif .jpg .png .swf .tiff .tif .jpeg";
                     unlink($fileTmpLoc); // Remove the uploaded file from the PHP temp folder
                     exit();
                }   
                else if($fileErrorMsg == 1) { // if file upload error key is equal to 1
                    echo "ERROR: An error occured while processing the file. Try again.";
                    exit();
                }

                


                $destination = "uploads/";
                $filename = $kaboom[0] . "_" . uniqid() . "." . $fileExt;


    	//move upload file
    	$moveResult = move_uploaded_file($fileTmpLoc, $destination . $filename);

        if ($moveResult != true) {
                    echo "ERROR: File not uploaded. Try again.";
                    unlink($fileTmpLoc); // Remove the uploaded file from the PHP temp folder
                    exit();
                }


        //file name
        echo "file name :" . $filename; 
        echo "<br>";

        //file extension
        echo "file extension:" . $fileExt;       
        echo "<br>";

        //file path
        echo "file path:" .  $fileTmpLoc;
        echo "<br>";
        //url
        echo "Url:" . $_POST['url'];

        $imgs = new Imgapp;
        $imgs->name=$filename;
        $imgs->url=$_POST['url'];
        $imgs->save();

        echo "<br><br>";
        echo "<a href='/home'>Dashboard</a>";

    }
}
