<?php

$zip = new ZipArchive;
$res = $zip->open('install.zip');
if ($res === TRUE) {
    unlink('install.php');
    $zip->extractTo('./');
    $zip->close();
    header("Location: install.php");
    unlink('install.zip');
} else {
    echo 'failed';
}