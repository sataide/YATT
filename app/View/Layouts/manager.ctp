<?php $this->assign('title', 'Manager - Übersicht'); ?>

<!DOCTYPE html>
<html lang="DE">
    <head>
        <title>YATT-Employee</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php echo $this->element('navbar_manager'); ?>
        <?php echo $this->fetch('content'); ?>



    </body>
</html>