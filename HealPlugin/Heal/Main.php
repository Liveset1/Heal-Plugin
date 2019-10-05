<?php

namespace HealPlugin\Heal;

use pocketmine\plugin\PluginBase;

use pocketmine\command\CommandSender;
use pocketmine\command\Command;

use pocketmine\Player;
use pocketmine\Server;

use pocketmine\utils\TextFormat as c;

class Main extends PluginBase{ 

  public function onEnable(){ 
  $this->getLogger()->notice(c::BOLD.c::DARK_PURPLE."(!)",c::RESET.c::DARK_AQUA." Heal/Plugin Has Been Enabled");
    }
  
public function onCommand(CommonSender $sender, Command $cmd, $label, array $args){ 
  if (strtlower($cmd->getName()) == "Heal"){
	  if ($sender->hasPermission("Heal/Plugin")){
		  $sender->sendMessage(c::BOLD.c::DARK_PURPLE."(!)".c::DARK_AQUA."You have been healed");
	  $sender->setHealth(20.0);
	  }elseIf(!$sender->hasPermission("Heal/Plugin")){
		  $sender->sendMessage(c:BOLD.c::DARK_RED."(!)".c::RESET.c::RED." Invaild Permission");
	  }
    } 
  ) 
  
  public function onDisable(){
	  $this->getLogger()->warning(c::BOLD.c::DARK_RED."(!)".c::RESET.c::RED." Heal/Plugin Has Been Disabled");
  }
}
	  
   
  
  
