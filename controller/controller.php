<?php
require_once("../model/database.php");
class Controller{


    public $db;
    public function __contruct(){
        $this ->db = new Database();
        return $this -> db = $this ->db->getGameList();
       
    }
   
    public function invoke(){
        // $games = $this->db->getGameList();
        // include '../view/gamelist.php';
        
        if (!isset($_GET['game']))
          {
               $games = $this->model->getGameList();
               include '../view/gamelist.php';
          }
          else
          {
               $games = $this->model->getGame($_GET['game']);
               include '../view/viewgame.php';
          }
    }

  
}

?>