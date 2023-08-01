<?php

include_once 'vendor/autoload.php';

use GeoIp2\Database\Reader;
use GeoIp2\Exception\AddressNotFoundException;

function countries_select() {
    global $countries_srz;

    $ip = get_ip_address();
    $html = '';
    $countries = unserialize($countries_srz);

    try {
        $geoip_reader = new Reader("country.mmdb");
        $geoip_record = $geoip_reader->country($ip);

        $country = $geoip_record->country->isoCode;

    } catch (\MaxMind\Db\Reader\InvalidDatabaseException $e) {
        $country = 'RU';
    } catch (AddressNotFoundException $e) {
        $country = 'RU';
    } catch(InvalidArgumentException $e) {
        $country = 'RU';
    }

    foreach($countries as $country_lt) {
        $selected = $country == $country_lt['country'] ? ' selected' : '';

        $html .= "<option{$selected} value=\"{$country_lt['aim_n']}\">{$country_lt['name']}</option>";
    }

    return $html;
}

function get_ip_address() {
    return preg_replace("|[^0-9.]|", "", get_ip());
}

function get_ip() {
    if (!empty($_SERVER['HTTP_X_PARKING']) && validate_ip($_SERVER['HTTP_X_PARKING'])) {
        return $_SERVER['HTTP_X_PARKING'];
    }

    // check for shared internet/ISP IP
    if (!empty($_SERVER['HTTP_CLIENT_IP']) && validate_ip($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    }

    // check for IPs passing through proxies
    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        // check if multiple ips exist in var
        if (strpos($_SERVER['HTTP_X_FORWARDED_FOR'], ',') !== false) {
            $iplist = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
            foreach ($iplist as $ip) {
                $ip = trim($ip);
                if (validate_ip($ip))
                    return $ip;
            }
        } else {
            if (validate_ip($_SERVER['HTTP_X_FORWARDED_FOR']))
                return $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
    }
    if (!empty($_SERVER['HTTP_X_FORWARDED']) && validate_ip($_SERVER['HTTP_X_FORWARDED']))
        return $_SERVER['HTTP_X_FORWARDED'];
    if (!empty($_SERVER['HTTP_X_CLUSTER_CLIENT_IP']) && validate_ip($_SERVER['HTTP_X_CLUSTER_CLIENT_IP']))
        return $_SERVER['HTTP_X_CLUSTER_CLIENT_IP'];
    if (!empty($_SERVER['HTTP_FORWARDED_FOR']) && validate_ip($_SERVER['HTTP_FORWARDED_FOR']))
        return $_SERVER['HTTP_FORWARDED_FOR'];
    if (!empty($_SERVER['HTTP_FORWARDED']) && validate_ip($_SERVER['HTTP_FORWARDED']))
        return $_SERVER['HTTP_FORWARDED'];

    // return unreliable ip since all else failed
    return $_SERVER['REMOTE_ADDR'];
}

/**
 * Ensures an ip address is both a valid IP and does not fall within
 * a private network range.
 */
function validate_ip($ip) {
    if (strtolower($ip) === 'unknown')
        return false;

    // generate ipv4 network address
    $ip = ip2long($ip);

    // if the ip is set and not equivalent to 255.255.255.255
    if ($ip !== false && $ip !== -1) {
        // make sure to get unsigned long representation of ip
        // due to discrepancies between 32 and 64 bit OSes and
        // signed numbers (ints default to signed in PHP)
        $ip = sprintf('%u', $ip);
        // do private network range checking
        if ($ip >= 167772160 && $ip <= 184549375) return false;
        if ($ip >= 2130706432 && $ip <= 2147483647) return false;
        if ($ip >= 2851995648 && $ip <= 2852061183) return false;
        if ($ip >= 2886729728 && $ip <= 2887778303) return false;
        if ($ip >= 3221225984 && $ip <= 3221226239) return false;
        if ($ip >= 3232235520 && $ip <= 3232301055) return false;
        if ($ip >= 4294967040) return false;
    }
    return true;
}
$countries_srz = 'a:4:{i:0;a:3:{s:5:"aim_n";i:1;s:7:"country";s:2:"RO";s:4:"name";s:7:"Romania";}i:1;a:3:{s:5:"aim_n";i:2;s:7:"country";s:2:"HU";s:4:"name";s:7:"Hungary";}i:2;a:3:{s:5:"aim_n";i:3;s:7:"country";s:2:"BG";s:4:"name";s:8:"Bulgaria";}i:3;a:3:{s:5:"aim_n";i:4;s:7:"country";s:2:"IT";s:4:"name";s:5:"Italy";}}';
?>

<!DOCTYPE html>
<html lang="bg">

<head>
	<meta charset="utf-8">
	<title>Clear Vision HD - Поляризирани очила за шофьори! </title>
	<meta name="description" content="Премахва заслепяването от фаровете. Безопасно движение през нощта.">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta property="og:image" content="path/to/image.jpg">
	<link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">
	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#1a1a1a">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#1a1a1a">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#1a1a1a">
<!--	<script type="text/javascript" src="//script.crazyegg.com/pages/scripts/0063/2263.js" async="async"></script>-->

	<style>body { opacity: 0; overflow-x: hidden; } html { background-color: #000; }</style>

    <link rel="stylesheet" href="css/main.min.css">
    <link rel="stylesheet" href="css/cocoen.min.css">
    <script src="js/scripts.min.js"></script>

    
    
    <script type="text/javascript">
        $jsonData = {"1":{"currency":" lei","productsum":"99.00","oldproductsum":"152.00","delivery":0,"totalsum":"99.00"},"2":{"currency":" for","productsum":"9900.00","oldproductsum":"15200.00","delivery":0,"totalsum":"9900.00"},"3":{"currency":" lev","productsum":"59.00","oldproductsum":"90.00","delivery":0,"totalsum":"59.00"},"4":{"currency":" euro","productsum":"39.00","oldproductsum":"60.00","delivery":0,"totalsum":"39.00"}}
    </script>

    <style>
        .ajax_loader {display: none}
        .ajax_loader_block {text-align: center}
        .ajax_loader_block img {margin: 0 auto; width: fit-content!important;}
        input, img, select, button, video {outline: none}
        .ajax_loader_block span {color: inherit; font-size: 16px}
        select, button {cursor: pointer}
    </style>

<!-- LT code insertion -->

<!-- /LT code insertion -->

<?php require_once('lib/pixels.php'); ?>
</head>

<body class="lang-bg ishome">

<div id="my-page">

	<div id="my-header">

		<header class="site-header">

			<div class="top-line">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-12 logo-col">
							<a href="#" class="logo"></a>
						</div>
						<div class="col-md-6 menu-col">
							<ul class="my-menu">
								<li><a href="#" id="info">Характеристики</a></li>
								<li><a href="#" id="deliv">Доставка и заплащане</a></li>
								<li><a href="#" id="order-but">Поръчайте</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>

		</header>

	</div>

	<div id="my-content">
		<section class="video">
			<video id="myvideo" autoplay loop muted playsinline>
				
			</video>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-text">
						<h2 class="h2">Поляризирани очила за шофьори</h2>
						<p class="p">Безопасно движение през нощта</p>
					</div>
					<div class="col-md-6 col-glasses">
						<img src="img/glasses.png" alt="glasses">
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 arrow">
						<a href="#" class="button" id="get-off">Отстъпка 35%&nbsp;&nbsp;→</a>
					</div>
				</div>
			</div>
		</section>
		<section class="impression" id="impression">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-text">
						<div class="text-wrap">
							<div class="text-head">
								<span class="span1">През нощта е трудно да се концентрирате върху пътя, заради насрещната светлината на фаровете или мъглата? <span class="clear-color">Clear Vision HD:</span></span>
								<span class="span2"></span>
							</div>
							<p class="p"><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;&nbsp; премахва заслепяването от фаровете</p>
							<p class="p"><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;&nbsp; създава топла и успокояваща атмосфера</p>
							<p class="p"><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;&nbsp; обектите стават много по-забележими</p>
							<p class="p"><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;&nbsp; повишава безопасността при шофиране</p>
						</div>
					</div>
					<div class="col-md-6 col-img">
						<div class="img-wrap">
							<img src="img/girldriver.png" alt="girl">
						</div>
					</div>
				</div>
				<div class="row slider-row">
					<div class="col-md-6 col-md-push-6 col-text">
						<div class="text-wrap">
							<div class="text-head">
								<span class="span1">Защо точно <span class="clear-color">Clear Vision HD:</span></span>
								<span class="span2"></span>
							</div>
							<p class="p"><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;&nbsp; увеличава видимостта вечерта и през нощта, при мъгла, дъжд и сняг</p>
							<p class="p"><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;&nbsp; подходящ за скиори, рибари, велосипедисти и др.</p>
							<p class="p"><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;&nbsp; универсални, унисекс</p>
						</div>
					</div>
					<div class="col-md-6 col-md-pull-6 col-img">
						<div class="owl-carousel carousel-sliders">
							<div class="owl-item">
								<div class="img-wrap">
									<img src="img/1-big.jpg" alt="girl" class="image">
								</div>
							</div>
							<div class="owl-item">
								<div class="img-wrap">
									<img src="img/2-big.jpg" alt="girl" class="image">
								</div>
							</div>
							<div class="owl-item">
								<div class="img-wrap">
									<img src="img/3-big.jpg" alt="girl" class="image">
								</div>
							</div>
							<div class="owl-item">
								<div class="img-wrap">
									<img src="img/4-big.jpg" alt="girl" class="image">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="feedback">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="headline">
							<h2 class="h2">Отзиви от клиенти</h2>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="feedback-carousel">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="owl-carousel feedback-slider">
							<div class="item">
								<h3 class="h3">Димитър <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star grey-star"></i></h3>
								<img src="img/glasses-real.png" alt="slide">
								<h4 class="h4">Вече всичко е наред</h4>
								<p class="p">Досега съм ги използвал два пъти. Използвах ги при нощно пътуване. Аз съм напълно доволен и съм убеден, че ще използвам очилата по-често, когато дните станат по-кратки и по-тъмни. Цената на този модел е разумна и качеството е отлично.</p>
							</div>
							<div class="item">
								<h3 class="h3">Алекс <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></h3>
								<img src="img/glasses-real-2.png" alt="slide">
								<h4 class="h4">Очилата са отлични!</h4>
								<p class="p">Можете да ги използвате с пълна увереност след 17:00, когато на улицата е мъгла също помагат много добре. Рамката е метална, очилата имат много атрактивен дизайн. Идеални са за пътуване.</p>
							</div>
							<div class="item">
								<h3 class="h3">Мирчо <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star grey-star"></i></h3>
								<img src="img/glasses-real-3.png" alt="slide">
								<h4 class="h4">Подобряват видимостта през нощта!</h4>
								<p class="p">Clear Vision перфектно подобрява видимостта при шофиране през нощта, много добре ви помага да видите пътя. Очилата са направени добре, носят се удобно. Качествен материал, щастлив съм.</p>
							</div>
							<div class="item">
								<h3 class="h3">Илия <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></h3>
								<img src="img/glasses-real-4.png" alt="slide">
								<h4 class="h4">Светлината от насрещните фарове вече не ме притесняват!</h4>
								<p class="p">Аз съм много доволен от това как действат тези очила. Нося контактни лещи и за мен това е основната трудност при шофиране през нощта, заради светофарите и насрещната светлина от автомобили. Очилата ме накараха да почувствам разликата.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="benefits" id="benefits">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="headline">
							<h2 class="h2">ПРЕДИМСТВА</h2>
						</div>
					</div>
				</div>
			</div>

		</section>
		<section class="icons">
			<div class="container">
				<div class="row icons-row">
					<div class="col-md-3">
						<img src="img/hammer.png" alt="hammer">
						<h4 class="h4">Удароустойчив материал</h4>
						<p class="p">Рамката няма да пострада при падане</p>
					</div>
					<div class="col-md-3">
						<img src="img/uv.png" alt="uv">
						<h4 class="h4">UV защита</h4>
						<p class="p">Стъклата са с поляризация, защитаваща и предпазваща зрението ви</p>
					</div>
					<div class="col-md-3">
						<img src="img/eye.png" alt="eye">
						<h4 class="h4">Премиум марка</h4>
						<p class="p">Метална рамка и модерен дизайн</p>
					</div>
					<div class="col-md-3">
						<img src="img/sunglasses.png" alt="sunglasses">
						<h4 class="h4">Универсална форма на очила</h4>
						<p class="p">Очилата могат лесно да се носят върху очилата ви за гледане</p>
					</div>
				</div>
			</div>
		</section>
		<section class="swipe-slider">
			<div class="cocoen">
				<img src="img/original.jpg" alt="origin">
				<img src="img/glasseson.jpg" alt="after">
			</div>
		</section>
		<section class="biker">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-text">
						<div class="text-wrap">
							<div class="text-head">
								<span class="span1">Стилни и комфортни</span>
							</div>
							<p class="p">Clear Vision HD са предназначени, както за мъже, така и за жени. Изработени от висококачествени материали, нашите очила ви дават стил, комфорт и издръжливост.
							</p>
						</div>
						<div class="text-wrap">
							<div class="text-head">
								<span class="span1">Първокласно качество</span>
							</div>
							<p class="p">За производството им се използват леки и издръжливи материали. Металната рамка на очилата осигурява надеждно и дълготрайно носене. Материалът е хипоалергичен и не предизвиква дразнения.
							</p>
						</div>
					</div>
					<div class="col-md-6 col-img">
						<div class="img-wrap">
							<img src="img/biker.png" alt="biker">
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="promo">
			<div class="container">
				<div class="row">
					<div class="col-md-12 promo-top">
						<h2 class="h2">ПРОМО</h2>
						<p class="p">Само за празниците!</p>
					</div>
					<div class="promo-bot">
						<h3 class="h3">Отстъпка 35%</h3>
						<p class="p"><span id="datepicker11"></span> До <script type="text/javascript">
                                Data = new Date();
                                yy = Data.getFullYear();
                                mm = Data.getMonth()+1;
                                dd = Data.getDate();
                                document.write( dd,'.',mm,'.',yy );
                            </script> г. <span id="datepicker22"></span></p>
					</div>
				</div>
			</div>
		</section>
		<section class="glasses" id="glasses">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="glasses-price-wrap">
							<h3 class="h3"><span class="old-price oldproductsum"></span></h3>
							<p class="new-price productsum"></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="owl-carousel glasses-slider">
							<div class="item">
									<img src="img/1.jpg" alt="outsun">
							</div>
							<div class="item">
								<img src="img/2.jpg" alt="outsun">
							</div>
							<div class="item">
								<img src="img/3.jpg" alt="outsun">
							</div>
							<div class="item">
								<img src="img/4.jpg" alt="outsun">
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 form-col">
						<div class="form-wrap">
							<form class="order_form" method="post" action="success/success.php">
								<div class="control">
									<input id="firstname" name="name" class="input" type="text" required>
									<label class="label" for="firstname">Име<span style="color:red"> *</span></label>
								</div>
								<div class="control">
									<input class="input" name="phone" type="text" id="phone" required>
									<label class="label" for="phone">Телефонен номер<span style="color:red"> *</span></label>
								</div>
								<p class="p">Нашият консултант ще се свърже с вас, за да уточни адреса за доставка</p>

                                <select style="display:none;" name="aim" class="countryselect"><option value='3'>Bulgaria</option></select>

                                <input type="hidden" name="productsum" class="productsum" value="1 руб.">
                                <input type="hidden" name="delivery" value="0 руб.">
                                <input type="hidden" name="totalsum" class="productsum" value="1 руб.">
                                <input type="hidden" name="user" value="1">
                                <input type="hidden" name="address" value="Уточнить у покупателя">

                                <div class="reolader">
								<button class="button mm_button" onclick="leadtradeSubmitClick(event, this.closest('form'))" type="submit">ПОРЪЧАЙ&nbsp;&nbsp;→</button>
                                    <div class="ajax_loader_block">
                                        <img class="ajax_loader" src="./img/ajax-loader.gif" alt="">
                                        <span class="ajax_loader">Loading</span>
                                    </div>
                                </div>
							</form>
							
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="how">
			<h2 class="h2">Как работим?</h2>
		</section>
		<section class="icons-bot">
			<div class="container">
				<div class="row icons-bot-row">
					<div class="col-md-2 col-md-offset-1">
						<img src="img/delivery.png" alt="delivery">
						<p class="p">Бърза доставка с куриер ≈ 3-5 дни</p>
					</div>
					<div class="col-md-2 col-md-offset-2">
						<img src="img/pay.png" alt="pay">
						<p class="p">Плащане само след получаване на попъчката</p>
					</div>
					<div class="col-md-2 col-md-offset-2">
						<img src="img/feed.png" alt="feed">
						<p class="p">Разкажете на приятелите си за покупката</p>
					</div>
				</div>
			</div>
		</section>
		<section class="phone">
			<div class="container">
				<div class="row">
					<div class="col-md-12 phone-col">
						<p class="p">Искате ли да ви се обадим?</p>
						<a href="#" class="button" id="call">Оставете заявка! <i class="fa fa-phone" aria-hidden="true"></i></a>

					</div>
				</div>
			</div>
		</section>
	</div>

	<div id="my-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12 footer-row">
					<h5 class="h5">ClearVision - Copyright &copy; <script>document.write((new Date).getFullYear())</script></h5>
					<p class="p">All rights reserved</p>
				</div>
			</div>
		</div>
	</div>

</div>
	<script src="js/cocoen.min.js"></script>
	<script src="js/cocoen-jquery.min.js"></script>
	<script src="js/main.js"></script>

    <!-- LeadTrade domonetization -->
    
    <!-- /LeadTrade domonetization -->
    
    <?php require_once('lib/js.php'); ?>
    </body>
</html>
