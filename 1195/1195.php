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
        <link href="./css/bootstrap.min.css" rel="stylesheet"  />
        <link href="./css/font-awesome.min.css" rel="stylesheet"/>
        <link href="./css/1195.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="./css/jquery-ui.min.css">
  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <script src="./js/jquery-2.1.4.min.js" ></script>
        <script src="./js/rangeslider.js"></script>
        <script src="./js/hover-menu.js"></script>
       <!--  <script type="text/javascript" src="<?php echo $url_path ?>/js/jquery-ui.js"></script> -->
    </head>
    <body>
        <?php  $dir_block.include'1195-content.php'; ?>       
    </body>
</html>