<?php

if (!file_exists('madeline.php')) {
    copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
}
include 'madeline.php';

$MadelineProto = new \danog\MadelineProto\API('session.madeline');
$MadelineProto->start();


$me = $MadelineProto->get_self();
$id = "https://t.me/refereumtalk";


\danog\MadelineProto\Logger::log($me);

if (!$me['bot']) {
   
$Chat = $MadelineProto->get_pwr_chat($id);

$okay  = array();

foreach($Chat['participants'] as $xx){

    
 if(isset($xx['user']['username'])){
     echo $xx['user']['username'];
     echo "<br>";
 }}}

?>
