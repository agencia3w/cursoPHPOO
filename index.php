<?php

require "vendor/autoload.php";

use app\classes\UploadFile;

$upload = new UploadFile('file.zip');
echo $upload->upload();