<?php
/**
 * Created by PhpStorm.
 * User: nfura
 * Date: 11/21/2018
 * Time: 5:15 PM
 */
//Getting user upload files
$file = $_FILES["file"];

//Saving file in uploads folder
move_uploaded_file($file["tmp_name"], "uploads/". $file["name"]);

//Redirecting back to home
header("Location: index.php");