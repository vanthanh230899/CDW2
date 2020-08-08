<?php 

require_once "lib/scss.inc.php";

use ScssPhp\ScssPhp\Compiler;

$scss = new compiler();

$result = $scss->compile('@import"sass/17.scss"');

file_put_contents('css/17.css',$result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>17</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/17.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="js/17.js"></script>
    <link rel="shortcut icon" href="#">
</head>
<body>
    <?php include '17-content.php'; ?>
</body>
</html>