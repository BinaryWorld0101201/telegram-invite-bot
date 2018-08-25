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
    $MadelineProto->messages->sendMessage(['peer' => '@okayandokay', 'message' => "Hi!\n Testing<3"]);
  
    
  
}

echo 'OK, done!'.PHP_EOL;


?>
