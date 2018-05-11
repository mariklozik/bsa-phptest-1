<?php declare(strict_types=1);

namespace Cryptocurrency\Task2;

class EmojiGenerator
{
	private $emojies = ['🚀', '🚃', '🚄', '🚅', '🚇'];

    public function generate(): \Generator
    {
    	foreach($this->emojies as $emoji){
        	yield $emoji;
        }
    }
}