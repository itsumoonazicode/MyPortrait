<?php
require_once('codebird.php');
require_once('config.php');

\Codebird\Codebird::setConsumerKey('CONSUMER_KEY', 'CONSUMER_SECRET');

$cb = \Codebird\Codebird::getInstance();

$cb->setToken('ACCESS_TOKEN', 'ACCESS_TOKEN_SECRET');

$params = array(
    'screen_name' => 'dawaruka',
    'include_rts' => true
);

$tweets =  (array) $cb->statuses_userTimeline($params);


// remove rate
array_pop($tweets);
// remove httpstatus
array_pop($tweets);

foreach($tweets as $tweet) {
    if (isset($tweet) == true) {
        echo '<li id="tweet_' .$tweet->id_str . ' ">' .$tweet->text . '</li>';
    }else{
        echo '<li id="tweet_' .$tweet->id_str . ' ">' .$tweet->text . '</li>';
    }
}

?>
