<?php
    require_once("game.php");
    class Database{
        public function getGameList(){
            $gamelist = array();
            $gamelist[] = new Game("Jungle", "r. Kip", "classic");
            return $gamelist;
        }
    }
?>