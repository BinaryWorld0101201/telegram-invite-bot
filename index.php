<?php

if (!file_exists('madeline.php')) {
    copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
}
include 'madeline.php';

$MadelineProto = new \danog\MadelineProto\API('session.madeline');
$MadelineProto->bot_login('655153898:AAFHsI3oj5ZIed6n-xiEN0NxE5yQ4e5wlHI');

$me = $MadelineProto->get_self();
$id = "carryprotocol";


\danog\MadelineProto\Logger::log($me);

if (!$me['bot']) {
    $MadelineProto->messages->sendMessage(['peer' => '@okayandokay', 'message' => "Hi!\n Testing<3"]);


    
    
    
    try {
    $Chat = $MadelineProto->get_pwr_chat($id);
    } catch (\danog\MadelineProto\RPCErrorException $e) {
    }

 
}

echo $Chat;
echo 'OK, done!'.PHP_EOL;


?>
