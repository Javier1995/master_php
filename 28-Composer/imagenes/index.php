<?php
require '../vendor/autoload.php';

$foto_original = "a.png";

$guardar_en = "fotomod.png";


$thumb = new PHPThumb\GD($foto_original);

$thumb->resize(400, 400);
$thumb->show();
