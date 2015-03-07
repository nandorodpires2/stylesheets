<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function setMessage($message, $class = null) {
    
    if (!is_array($message)) {
        $_SESSION['messages'][] = array(
            'message' => $message,
            'class' => $class ? $class : "alert-success"
        );
    } else {
        
    }
}

function getMessages() {
    return $_SESSION['messages'];
}

function renderMessages() {
    $messages = getMessages();
    $html = "";
    
    if ($messages) {
        foreach ($messages as $message) {
            $msg = $message['message'];
            $class = $message['class'];
            $html .= "<div class='alert {$class}'>{$msg}</div>";
        }
    }    
    
    echo $html;
    unsetMessages();
    
}

function unsetMessages() {
    unset($_SESSION['messages']);
}