<?php 

require_once "lib/scss.inc.php";

use ScssPhp\ScssPhp\Compiler;

$scss = new compiler();

$result = $scss->compile('@import"sass/26.scss"');

file_put_contents('css/26.css',$result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>26</title>
    

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/26.css">
    <link rel="stylesheet" href="font/font-awesome.min.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="js/26.js"></script>
    <link rel="shortcut icon" href="#">
</head>
<body>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <?php include '26-content.php'; ?>
    
</body>

</html>