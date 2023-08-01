<?php
$dir = __DIR__;

$alias = [
    'fbpixel' => 'fb'
];

foreach ($alias as $from => $to) {
    if (!empty($_REQUEST[$from]) && !isset($_REQUEST[$to])) {
        $_REQUEST[$to] = $_REQUEST[$from];
    }
}

if (!empty($_REQUEST['fb'])) {
    $fb_pixel = (string) $_REQUEST['fb'];

    include $dir . '/pixels/fb.php';
} else if (!empty($_COOKIE['fb'])) {
    $fb_pixel = (string) $_COOKIE['fb'];

    include $dir . '/pixels/fb.php';
}

if (!empty($_REQUEST['tt'])) {
    $tt_pixel = (string) $_REQUEST['tt'];

    include $dir . '/pixels/tiktok.php';
} else if (!empty($_COOKIE['tt'])) {
    $tt_pixel = (string) $_COOKIE['tt'];

    include $dir . '/pixels/tiktok.php';
}

$params = [
    'subid1',
    'subid2',
    'subid3',
    'subid4',
    'fb',
    'tt'
];

foreach ($params as $param) {
    if (!empty($_REQUEST[$param])) {
        setcookie($param, $_REQUEST[$param]);
    } else if (isset($_COOKIE[$param])) {
        setcookie($param, "", time() - 9999999);
    }
}