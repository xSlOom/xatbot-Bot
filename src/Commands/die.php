<?php

$die = function (int $who, array $message, int $type) {

    $bot = OceanProject\API\ActionAPI::getBot();

    if (!$bot->minrank($who, 'die')) {
        return $bot->network->sendMessageAutoDetection($who, $bot->botlang('not.enough.rank'), $type);
    }

    $bot->network->sendMessageAutoDetection($who, 'Bye!', $type);
    $bot->stopped = true;
};
