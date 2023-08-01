<?php

$post = [
    'name' => $_REQUEST['name'],
    'hash' => 'ElAKW',
    'ip' => (isset($_SERVER['HTTP_CF_CONNECTING_IP']) ? $_SERVER['HTTP_CF_CONNECTING_IP'] : $_SERVER['REMOTE_ADDR']),
    'phone' => $_REQUEST['phone'],
    'aim' => $_REQUEST['aim'] > 1 ? $_REQUEST['aim'] : 1,
    'data' => []
];

if (!empty($_REQUEST['address'])) {
    $post['data']['address'] = $_REQUEST['address'];
}

foreach (["subid1", "subid2", "subid3", "subid4", "description"] as $s) {
    if (!empty($_REQUEST[$s])) {
        $post[$s] = $_REQUEST[$s];
        continue;
    }

    if (!empty($_COOKIE[$s])) $post[$s] = $_COOKIE[$s];
}

$ch = curl_init("http://leadtrade.ru/api/send_lead");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Referer: {$_SERVER['HTTP_HOST']}"
]);
$doc = curl_exec($ch);
curl_close($ch);

$result = json_decode($doc, 1);

$number = $result['mm_number'];

if(isset($result['is_spam']) || empty($result['mm_number'])) {
    header("Location: failure.php");
    die();
}

?>
<!DOCTYPE html>
<html>

<head>

    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">

    <link type="text/css" rel="stylesheet" href="//leadtrade.ru/landing/css/style.css" />

    <script src="//leadtrade.ru/landing/js/jquery.min.js"></script>

    <script type="text/javascript" src="//leadtrade.ru/landing/js/script.js"></script>

    <title>ORDER HAS BEEN SUBMITTED!</title>

<?php if(!isset($result['no_code']) || $result['no_code'] == 0) { ?>

<?php require_once('../lib/pixels.php'); ?>
<?php } ?>
</head>

<body>

<div class="wrap_block_success">

    <div class="block_success">

        <h2>CONGRATULATIONS! YOU ORDER №<?php echo $number; ?> HAS BEEN SUBMITTED!</h2>

        <a href="moreinfo.html" class="url_more_info">Click here to get more order details.</a>

        <p class="success">Our sales manager will be in touch with you soon to confirm your order. Please make sure you contact phone is on.</p>

        <h3>Please review the data you have provided</h3>

        <div class="wrap_list_info">

            <ul class="list_info">

                <li><span>First and Last Name: </span><?php echo $_REQUEST['name']; ?></li>
                <li><span>Phone: </span><?php echo $_REQUEST['phone']; ?></li>

            </ul>
        </div>

        <p class="fail">If you made an error/typo in the order form please, <a href="#" onclick="return window.history.back()" >submit a new order</a></p>

    </div>

</div>

</body>

</html>