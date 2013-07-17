<?php

require_once 'vendor/autoload.php';

try {
    $mail = new Zend\Mail\Storage\Imap(array('host'     => 'imap.gmail.com',
                                         'user'     => 'email@gmail.com',
                                         'password' => '########',
                                         'ssl'      => 'SSL'));
} catch (Exception $ex) {
    echo $ex->getMessage();
}

echo "Unread mails:\n";
foreach ($mail as $message) {
    if ($message->hasFlag(Zend\Mail\Storage::FLAG_SEEN)) {
        continue;
    }
    // mark recent/new mails
    if ($message->hasFlag(Zend\Mail\Storage::FLAG_RECENT)) {
        echo '! ';
    } else {
        echo '  ';
    }
    echo $message->subject . "\n";
}
