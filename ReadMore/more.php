<?php
require_once('codebird.php');
require_once('config.php');

Codebird::setConsumerKey('CONSUMER_KEY', 'CONSUMER_SECRET'); // static, see README

$cb = Codebird::getInstance();

$cb->setToken('ACCESS_TOKEN', 'ACCESS_TOKEN_SECRET');

$tweets = $cd->statuses_userTimeline();

?>
