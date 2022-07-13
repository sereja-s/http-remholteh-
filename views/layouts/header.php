<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>РемХолТех</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="/template/css/reset.css">
	<link rel="stylesheet" href="/template/css/slick.css">
	<link rel="stylesheet" href="/template/css/jquery.fancybox.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
	<link rel="stylesheet" href="/template/css/style.css">
</head>

<body>

	<header class="header" style="background-image: url(../..<?php echo Info::getBg($info['id']); ?>);">
		<div class="container">
			<div class="header__top">
				<a class="logo" href="/">
					<img class="logo__img" src="<?php echo Info::getLogoImage($info['id']); ?>" alt="ремонт холодильников">
				</a>
				<a class="phone" href="#"><?php echo $info['phone-number']; ?></a>
			</div>
			<div class="header__content">
				<h1 data-wow-delay=".5s" class="header__title wow animate__fadeInLeft">
					<?php echo $info['title']; ?>
				</h1>
				<h2 data-wow-delay="1s" class="header__subtitle wow animate__fadeInLeft">
					<?php echo $info['subtitle']; ?>
				</h2>
				<p data-wow-delay="1.5s" class="header__text wow animate__fadeInLeft">
					<?php echo $info['text']; ?>
				</p>
				<a class="button" href="#contact">КОНСУЛЬТАЦИЯ ЭКСПЕРТА</a>
				<!-- <div class="social header__social">
					<a class="social__link" href="#">
						<svg class="test" width="26" height="26">
							<use xlink:href="images/icon/sprite.svg#instagram"></use>
						</svg>
					</a>
					<a class="social__link" href="#">
						<svg width="25" height="19">
							<use xlink:href="images/icon/sprite.svg#telegram"></use>
						</svg>
					</a>
					<a class="social__link" href="#">
						<svg width="26" height="26">
							<use xlink:href="images/icon/sprite.svg#whatsapp"></use>
						</svg>
					</a>
					<a class="social__link" href="#">
						<svg width="14" height="25">
							<use xlink:href="images/icon/sprite.svg#facebook"></use>
						</svg>
					</a>
				</div> -->
				<img data-wow-delay="2s" class="header__images wow animate__fadeInUpBig" src="<?php echo Info::getImage($info['id']); ?>" alt="ремонт холодильников">
			</div>
		</div>
	</header>