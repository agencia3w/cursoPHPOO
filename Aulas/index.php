<?php

require "vendor/autoload.php";

use app\classes\UploadFoto;

$upload = new UploadFoto('file.zip');
$upload->validation();
echo $upload->upload();