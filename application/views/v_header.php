<!DOCTYPE html>
<html>
<head>
    <meta charset=”utf-8”>
    <title>12.3A.04 | Simple Web Template</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/style.css">
</head> 
<body>
    <div id=”wrapper”>
        <header>
            <hgroup>
                <h1>Simple Web Template</h1>
                <h3>Membuat Template Sederhana dengan CodeIgniter</h3>
            </hgroup>
            <nav>
                <ul>
                    <li><a href="<?php echo base_url(). 'web' ?>">Home</a></li>
                    <li><a href="<?php echo base_url(). 'web/about' ?>">About</a></li>
                </ul>
            </nav>
        </header>
