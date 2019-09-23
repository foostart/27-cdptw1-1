<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);

    if (!class_exists('lessc')) {
        $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);      
        require_once($dir_block.'/libs/lessc.inc.php');
    }
    
    $less = new lessc;
    $less->compileFile('less/type-4.less', 'css/4.css');
    
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
  
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Module - 1213</title>

        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css"/>

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type-4.less', 'css/type-4.css');
        ?>
        <link rel="stylesheet" href="css/type-4.css">
        <script src="js/jquery-2.1.4.min.js" ></script>
        <script src="js/bootstrap.min.js" ></script>
        <script src="js/jquery-ui.js" ></script>
        <script src="js/rangeslider.js" ></script>
        <script src="js/hover-menu.js"></script>
    </head>

    <body >
        <?php include '../1213/1213-content.php'; ?>
    </body>        

</html>