<?php 

$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

require_once "libs/scss.inc.php";
use ScssPhp\ScssPhp\Compiler;
$scss = new Compiler();
$sass = file_get_contents("sass/style.scss"); //file
$style = $scss->compile($sass);
file_put_contents("css/styles.css",$style);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="<?php echo $url_path ?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo $url_path ?>/css/reset.css">
        <link rel="stylesheet" href="<?php echo $url_path ?>/css/styles.css">      
        <script src="js/jquery.js"></script>       
        <script src="js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/swiper/js/swiper.min.js">  </script>
        <script src="js/1738.js"></script>     
    </head>
    <body >
        <?php include "./1738-content.php"; ?>
    </body>
</html>