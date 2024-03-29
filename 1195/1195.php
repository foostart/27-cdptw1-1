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
    $less->compileFile('less/1195.less', 'css/1195.css');    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Module - 1195</title>
        <link href="<?php echo $url_path ?>/css/bootstrap-3.4.1.min.css" rel="stylesheet"  />
        <link href="<?php echo $url_path ?>/css/font-awesome.min.css" rel="stylesheet"/>
        <link href="<?php echo $url_path ?>/css/1195.css" rel="stylesheet" type="text/css" />
       
  
        <script src="<?php echo $url_path ?>/js/jquery-3.3.1.min.js"></script>
        <script src="<?php echo $url_path ?>/js/bootstrap-3.4.1.min.js"></script>

    </head>
    <body>
        <?php  $dir_block.include'1195-content.php'; ?>       
    </body>
</html>