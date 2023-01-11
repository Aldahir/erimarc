<?php
session_start();
// !defined('URL_BASE') ? define('URL_BASE', "https://erimarc.co.ao/teste/admin") : null; 
!defined('URL_BASE') ? define('URL_BASE', "http://127.0.0.1/erimarc/admin") : null;
?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cPonto</title>
    <link rel="stylesheet" href="<?php echo URL_BASE ?>/dist/css/cponto.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>


<body>
    <div class="container">