<?php
require_once("../model/database.php");
class Controller{

    // public function invoke(){
    //     if(isset($_GET['stid']))
    //     {
    //         $mGame = new 
    //     }
    // }

    public $db;
    public function __contruct(){
        $this ->db = new Database();

    }

    public function viewall(){
        $games = $this->db->getGameList();
        include 'view/gamelist.php';
    }

    // public function view(){
    //     $game = $this ->db ->getGame
    // }
}

?>