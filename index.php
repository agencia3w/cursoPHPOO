<?php

require "vendor/autoload.php";

use app\classes\UploadFoto;

$upload = new UploadFoto('foto.png');
$upload->extension();
$upload->rename();
echo $upload->upload();