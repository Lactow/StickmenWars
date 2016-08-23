<!DOCTYPE html>
<html lang="en">
    <head>
            <title>Stick man</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="./web/css/bootstrap.min.css">
            <link rel="stylesheet" href="./web/css/style.css">
            <?php if(isset($_SESSION['login'])){
                echo '<link rel="stylesheet" href="./web/css/style-user-display.css">';
            } else {
                echo '<link rel="stylesheet" href="./web/css/style-default-display.css">';
            }
            ?>
            <!--<script src="./web/js/jquery-3.1.0.min.js"></script> -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
            <script src="./web/js/bootstrap.min.js"></script>
    </head>
        