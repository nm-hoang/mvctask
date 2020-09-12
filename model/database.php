<?php
    require_once('../init.php');
    include_once("game.php");
    class Database{
        public function getGameList(){
            //  return array(
            //     "PUGB Gaming" => new Game("PUGB Gaming", "Bredan Greene", "Survival Game."),
            //     "Arena of Valor" => new Game("Arena of Valor", "Garena", "Online Game"),
            //     "Sayonara Wild Hearts" => new Game("Sayonara Wild Hearts", "Jacob Ridley", "Racing"),
            //     "SuperHot VR" => new Game("SuperHot VR", "Graeme Meredith", "Adventure"),
            //     "Metro Exodus" => new Game("Metro Exodus", "Andy Kelly", "Survival Game"),
            // );
            
            global $db;
            $stmt = $db -> prepare("SELECT * FROM game");
            $stmt -> execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        
        public function getGame($title)
	{
		$allGames = $this->getGameList();
		return $allGames[$title];
	}
    }
?>