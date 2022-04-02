<?php

namespace xtakumatutix\firespreadcancel;

use pocketmine\block\Block;
use pocketmine\block\Fire;
use pocketmine\block\VanillaBlocks;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\block\BlockSpreadEvent;

Class Main extends PluginBase implements Listener
{
    public function onEnable() :void
    {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onBreak(BlockSpreadEvent $event)
    {
        $source = $event->getSource();
        if ($source instanceof Fire)
        {
            $event->cancel();
        }
    }
}