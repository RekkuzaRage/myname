	<?php
    namespace scientificart\myname;
    
    use pocketmine\command\Command;
    use pocketmine\command\CommandSender;
    use pocketmine\plugin\PluginBase;
    use pocketmine\Player
    use pocketmine\IPlayer
    
    class Main extends PluginBase{
        public function onCommand(CommandSender $sender, Command $command, $label, array $args){
            switch($command->getName()){
                case "myname";
                2 $sender->sendMessage("Your name is " . $sender->getName() . ".");
            }
        }
       
}
