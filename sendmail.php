<?php
/**
 * Created by PhpStorm.
 * User: tankerktv
 * Date: 13.06.2018
 * Time: 17:17
 */


$email      = @trim(stripslashes($_POST['email']));
$name       = @trim(stripslashes($_POST['name']));
$message    = 'Имя отправителя: '.$name."\r\n".'Сообщение: '.@trim(stripslashes($_POST['message']))."\r\n".'E-Mail отправителя: '.$email;
$to      = 'vezdefon@3dkv.ru';
$subject = 'Запрос с сайта vezdefon.pro';
$headers = 'From: Вездефон <robot@vezdefon.pro>' . "\r\n" .
    'Reply-To: '.$email. "\r\n" .
    'X-Mailer: PHP/' . phpversion();;

mail($to, $subject, $message, $headers);

?>

<!DOCTYPE HTML>
<!--
Spectral by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Generic - Spectral by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
		<link rel="icon" href="/favicon.ico" type="image/x-icon">
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-121313956-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-121313956-1');
        </script>
        <!-- Yandex.Metrika counter -->
        <script type="text/javascript" >
            (function (d, w, c) {
                (w[c] = w[c] || []).push(function() {
                    try {
                        w.yaCounter49487572 = new Ya.Metrika2({
                            id:49487572,
                            clickmap:true,
                            trackLinks:true,
                            accurateTrackBounce:true
                        });
                    } catch(e) { }
                });

                var n = d.getElementsByTagName("script")[0],
                    s = d.createElement("script"),
                    f = function () { n.parentNode.insertBefore(s, n); };
                s.type = "text/javascript";
                s.async = true;
                s.src = "https://mc.yandex.ru/metrika/tag.js";

                if (w.opera == "[object Opera]") {
                    d.addEventListener("DOMContentLoaded", f, false);
                } else { f(); }
            })(document, window, "yandex_metrika_callbacks2");
        </script>
        <noscript><div><img src="https://mc.yandex.ru/watch/49487572" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
        <!-- /Yandex.Metrika counter -->
	</head>
	<body>

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="index.html">Вездефон</a></h1>
						<header id="header" class="alt">
							<h1><a href="index.html">Вездефон</a></h1>
							<nav id="nav">
								<ul>
									<li class="special">
										<a href="#menu" class="menuToggle"><span>Меню</span></a>
										<div id="menu">
											<ul>
												<li><a href="/">Главная</a></li>
												<li><a href="/">Вездефон</a></li>
												<li><a href="/">Наша цель</a></li>
												<li><a href="/">Наша команда</a></li>
												<li><a href="/">Достоинства</a></li>
												<li><a href="feedback.html">Связаться с нами</a></li>
											</ul>
										</div>
									</li>
								</ul>
							</nav>
						</header>
					</header>

				<!-- Main -->
					<article id="main">
						<header>
							<h2>Ваше сообщение успешно отправлено на нашу корпоративную почту!</h2>
						</header>
					</article>

				<!-- Footer -->
				<footer id="footer">
					<ul class="copyright">
						<li>&copy; 2017-2018</li><li><a href="http://preactum.ru">Преактум</a> </li><li><a href="http://tpu.ru">ТПУ</a> </li>
					</ul>
				</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
