<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function isPost() {
    return $_SERVER["REQUEST_METHOD"] == 'POST' ? true : false;
}

function getPost() {
    
    $posts = array();
    foreach ($_POST as $key => $post) {
        if ($key !== '' && $key !== 'submit') {
            $posts[$key] = strip_tags($post);
        }
    }    
    return $posts;
    
}
