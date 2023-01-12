<?php 

declare(strict_types=1);

require_once 'song.php';

$song = new Song('Blackbird', 234);

print $song->name . PHP_EOL;
