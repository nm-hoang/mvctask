<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      
        foreach($games as $game): 
            echo 'Title: '. $game->title;
        endforeach;    
    ?>
    <h1>demo</h1>
</body>
</html>