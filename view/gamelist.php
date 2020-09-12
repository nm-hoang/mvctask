<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      include '../controller/controller.php';
        foreach($games as $title => $game): 
            echo 'Title: '. $game->title;
        endforeach;    
    ?>
    <h1>demo</h1>
</body>
</html>