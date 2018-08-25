<?php

if (!file_exists('madeline.php')) {
    copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
}
include 'madeline.php';

$MadelineProto = new \danog\MadelineProto\API('session.madeline');
$MadelineProto->start();


$me = $MadelineProto->get_self();
$id = "https://t.me/carryprotocol";


\danog\MadelineProto\Logger::log($me);

if (!$me['bot']) {
   


$Updates = $MadelineProto->channels->inviteToChannel(['channel' => $id, 'users' => ['okayandokay', 'okayandokay'],  ]);

}

echo 'OK, done!'.PHP_EOL;


?>
