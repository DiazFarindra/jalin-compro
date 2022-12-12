<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function pre($data, $next = 0){
    echo '<pre>';
    print_r($data);
    echo '</pre>';
    if(!$next){ exit; }
}