<?php
<<<<<<< HEAD
// include '../config.php';
 
        $url_host = 'http://'.$_SERVER['HTTP_HOST'];
        $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
=======
 include '../config.php';
 
        $url_host = 'http://'.$_SERVER['HTTP_HOST'];
        $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), $sala);
>>>>>>> 88c8aaf41b2e372abf8e51db23f9843ed6220db0
        $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
        
        preg_match_all($pattern_uri, __DIR__, $matches);
        $url_path = $url_host . $matches[1][0];
        $url_path = str_replace('\\', '/', $url_path);
if (!class_exists('lessc')) {
    $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
    require_once($dir_block.'/libs/lessc.inc.php');
}
$less = new lessc;
$less->compileFile('less/1215.less', 'css/1215.css');

?>
<!DOCTYPE html>
<html lang="en">
<head>
<<<<<<< HEAD
   <title>Module - 1215</title>
=======
   <title>type-1215</title>
>>>>>>> 88c8aaf41b2e372abf8e51db23f9843ed6220db0
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet">
   <link href="<?php echo $url_path ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo $url_path ?>/css/swiper.min.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo $url_path ?>/css/1215.css" rel="stylesheet" type="text/css" />
   <script src="<?php echo $url_path ?>/js/jquery-2.1.4.min.js"></script>
   <script src="<?php echo $url_path ?>/js/swiper.min.js"></script>
   
<<<<<<< HEAD
  
=======
   <script src="<?php echo $url_path ?>/js/1215.js"></script>
>>>>>>> 88c8aaf41b2e372abf8e51db23f9843ed6220db0


</head>
<body>
    <?php include $dir_block.'/1215-content.php'; ?>
  
</body>

</html>




