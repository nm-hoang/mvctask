<?php
    require_once("model/game.php");
    class Database{
        public function getGameList(){
            $gamelist = array();
            $gamelist[] = new Game("Jungle", "r. Kip", "classic");
            return $gamelist;
        }
    }
?>