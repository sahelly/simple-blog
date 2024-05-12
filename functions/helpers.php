<?php

//config

define('BASE_URL','http://localhost/simple-blog/');



function asset($file){
    return trim(BASE_URL,'/ ').'/'.trim($file,'/ ');
}