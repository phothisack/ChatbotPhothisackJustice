<?php
echo "hello bot";
$token ="1369773340:AAETiVu6Lh--4nsom0OOvjOeh3o-HqjgK8s";
$user_id = 1079205796 ;
$mesg = 'bot answer';
$request_params=[
    'chat_id' => $user_id,
    'text' => $mesg
];
$request_url = 'http://api.telegram.org/bot'. $token . '/sendMessage?' . http_build_query($request_params);
file_get_contents($request_url);   