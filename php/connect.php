<?php
$connect = mysqli_connect('localhost', 'root', 'root', 'gamefox');

if (!$connect){
    die ("error connect");
}