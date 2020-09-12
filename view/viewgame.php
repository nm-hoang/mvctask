<link rel="stylesheet" href="../css/mystyle.css">
<?php
    include '../controller/controller.php';
    include '../view/header.php'; 
    $games= new Controller();
    $games = $games->__contruct();
    print_r($games);
?>
<h2>All games now available</h2>
<div class="row" style = "padding-top:30px">
  <?php 
    $i =0;
    foreach($games as $game){
  ?>
      <div class="col-sm-3">
    <img src="../img/<?php echo $i?>.jpg" all=" " class="custom-img">
    <h4><?php echo "Title: ". $game['title'] ?></h4>
    <h4><?php echo "Author: ". $game['author'] ?></h4>
    <h4><?php echo "Description: ". $game ['description'] ?></h4>
  </div>
  <?php $i++; } ?>

	