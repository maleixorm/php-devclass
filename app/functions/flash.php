<?php

function flash($key, $message, $type = 'danger') {
    if (!isset($_SESSION['flash'][$key])) {
        $_SESSION['flash'][$key] = "<div class='alert alert-{$type}'>".$message."</div>";
    }
}

function get($key) {
    if (isset($_SESSION['flash'][$key])) {
        $message = $_SESSION['flash'][$key];
        unset($_SESSION['flash'][$key]);
        return $message ?? '';
    }
}