<?php

$connection = mysqli_connect(
    'localhost',
    'root',
    '',
    'project');

if (!$connection){
    die( 'error'.
        mysqli_connect_error() );


}
