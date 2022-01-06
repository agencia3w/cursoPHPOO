<?php

require "vendor/autoload.php";

use app\classes\UploadFile;

$upload = new UploadFile('file.zip');
$upload->extension();
$upload->rename();
echo $upload->upload();