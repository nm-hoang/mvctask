<?php
    include_once("game.php");
    class Database{
        public function getGameList(){
            // $gamelist = array();
            // $gamelist[] = new Game("Jungle", "r. Kip", "classic");
            // return $gamelist;
            return array(
                "PUGB Gaming" => new Game("PUGB Gaming", "Bredan Greene", "Survival Game."),
                "Arena of Valor" => new Game("Arena of Valor", "Garena", "Online Game"),
                "Sayonara Wild Hearts" => new Game("Sayonara Wild Hearts", "Jacob Ridley", "Racing"),
                "SuperHot VR" => new Game("SuperHot VR", "Graeme Meredith", "Adventure"),
                "Metro Exodus" => new Game("Metro Exodus", "Andy Kelly", "Survival Game"),
            );
        }
        public function getGame($title)
	{
		$allGames = $this->getGameList();
		return $allGames[$title];
	}
    }
?>