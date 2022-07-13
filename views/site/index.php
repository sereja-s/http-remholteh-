<?php include ROOT . '/views/layouts/header.php'; ?>





<section class="services">
	<div class="container">
		<h2 class="title"><?php echo $service['title']; ?></h2>
		<div class="services__inner">
			<div class="services__content">
				<div class="services__content-box">
					<h6 class="services__content-title">
						<?php echo $service['title_before_paragraph']; ?>
					</h6>

					<div class="services__content-textbox">
						<p class="services__content-text">
							<?php echo $service['paragraph']; ?>
						</p>
						<!-- <p class="services__content-text">							
						</p> -->



						<ul class="services__list-left">

							<?php foreach ($works as $worksItem) : ?>

								<li class="services__item-left">
									<!-- <p class="benefits__item-num">650</p> -->
									<p class="benefits__item-title"><?php echo $worksItem['title']; ?></p>
									<p class="benefits__item-text">
										<?php echo $worksItem['text']; ?>
									</p>
								</li>

							<?php endforeach; ?>

						</ul>

					</div>
				</div>
				<!-- <div class="services__content-box">
					<h6 class="services__content-title">						
					</h6>
					<div class="services__content-textbox">
						<p class="services__content-text">							
						</p>
					</div>
					<a class="button button--decor" href="#">КОНСУЛЬТАЦИЯ ЭКСПЕРТА</a>
				</div> -->
			</div>
			<ol class="services__list">
				<li data-wow-delay="1s" class="services__item wow animate__fadeInRight">
					<p class="services__item-title"><?php echo $service['step1']; ?></p>
					<p class="services__item-text"><?php echo $service['step1_text']; ?></p>
				</li>
				<li data-wow-delay="1.2s" class="services__item wow animate__fadeInRight">
					<p class="services__item-title"><?php echo $service['step2']; ?></p>
					<p class="services__item-text"><?php echo $service['step2_text']; ?></p>
				</li>
				<li data-wow-delay="1.4s" class="services__item wow animate__fadeInRight">
					<p class="services__item-title"><?php echo $service['step3']; ?></p>
					<p class="services__item-text"><?php echo $service['step3_text']; ?></p>
				</li>
				<li data-wow-delay="1.6s" class="services__item wow animate__fadeInRight">
					<p class="services__item-title"><?php echo $service['step4']; ?></p>
					<p class="services__item-text"><?php echo $service['step4_text']; ?></p>
				</li>
				<li data-wow-delay="1.8s" class="services__item wow animate__fadeInRight">
					<p class="services__item-title"><?php echo $service['step5']; ?></p>
					<p class="services__item-text"><?php echo $service['step5_text']; ?></p>
				</li>
				<!-- <li data-wow-delay="2s" class="services__item wow animate__fadeInRight">
					<p class="services__item-title"></p>
					<p class="services__item-text"></p>
				</li> -->
			</ol>
		</div>
	</div>
</section>


<!-- <section class="benefits">
	<div class="container">
		<div class="benefits__inner">
			<img data-wow-delay="2s" class="benefits__images wow animate__fadeInUp" src="images/car.png" alt="car">
			<div class="benefits__content">
				<h2 class="title benefits__title">ПОЧЕМУ МЫ?</h2>
				<ul class="benefits__list" style="background-color: #21062A;">
					<li class="benefits__item">
						<p class="benefits__item-num">650</p>
						<p class="benefits__item-title">успешно доставленных авто</p>
						<p class="benefits__item-text">
							большой опыт пригона автомобилей из США под ключ, все клиенты остались довольны на 100%
						</p>
					</li>
					<li class="benefits__item">
						<p class="benefits__item-num">5</p>
						<p class="benefits__item-title">лет на рынке Украины</p>
						<p class="benefits__item-text">
							Работаем по всей территории Украины, работаем по договору с клиентами
						</p>
					</li>
					<li class="benefits__item">
						<p class="benefits__item-num">100%</p>
						<p class="benefits__item-title">доверия клиентов</p>
						<p class="benefits__item-text">
							Онлайн отчетность. Вы всегда в курсе статуса подбора вашего авто. Фото и видео отчет
						</p>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section> -->


<!-- <section class="carousel">
	<div class="container">
		<h2 class="title">
			ПРИГНАННЫЕ НАМИ АВТО
		</h2>
		<div class="carousel__inner">

			<div class="carousel__item">
				<div class="carousel__item-box">
					<img class="carousel__item-img" src="images/carousel/1.jpg" alt="">
					<h4 class="carousel__item-title">INFINITI QX50 2016 г.</h4>
					<p class="carousel__item-text">Экономия 4500 $</p>
				</div>
			</div>
			<div class="carousel__item">
				<div class="carousel__item-box">
					<img class="carousel__item-img" src="images/carousel/2.jpg" alt="">
					<h4 class="carousel__item-title">TESLA MODEL 3 2018 г.</h4>
					<p class="carousel__item-text">Экономия 5500 $</p>
				</div>
			</div>
			<div class="carousel__item">
				<div class="carousel__item-box">
					<img class="carousel__item-img" src="images/carousel/3.jpg" alt="">
					<h4 class="carousel__item-title">TESLA MODEL 3 2018 г.</h4>
					<p class="carousel__item-text">Экономия 5500 $</p>
				</div>
			</div>
			<div class="carousel__item">
				<div class="carousel__item-box">
					<img class="carousel__item-img" src="images/carousel/1.jpg" alt="">
					<h4 class="carousel__item-title">INFINITI QX50 2016 г.</h4>
					<p class="carousel__item-text">Экономия 4500 $</p>
				</div>
			</div>
			<div class="carousel__item">
				<div class="carousel__item-box">
					<img class="carousel__item-img" src="images/carousel/2.jpg" alt="">
					<h4 class="carousel__item-title">TESLA MODEL 3 2018 г.</h4>
					<p class="carousel__item-text">Экономия 5500 $</p>
				</div>
			</div>
			<div class="carousel__item">
				<div class="carousel__item-box">
					<img class="carousel__item-img" src="images/carousel/3.jpg" alt="">
					<h4 class="carousel__item-title">TESLA MODEL 3 2018 г.</h4>
					<p class="carousel__item-text">Экономия 5500 $</p>
				</div>
			</div>
		</div>
	</div>
</section> -->



<section id="contact" class="contacts">
	<div class="container">
		<div class="contacts__inner">
			<div class="contacts__info">
				<h2 class="title">
					КОНТАКТЫ
				</h2>
				<ul class="contacts__list">
					<li class="contacts__item">
						<p class="contacts__item-title">Адрес</p>
						<p class="contacts__item-text">
							<?php echo $info['address']; ?> <br>
						</p>
					</li>
					<li class="contacts__item">
						<p class="contacts__item-title">Эл.почта</p>
						<p class="contacts__item-text">
							<?php echo $info['email']; ?> <br>
						</p>
					</li>
					<!-- <li class="contacts__item">
						<p class="contacts__item-title">Время работы</p>
						<p class="contacts__item-text">
							Пн-Сб: с 9:00 до 19:00, <br>
							Вс: выходной
						</p>
					</li> -->
					<li class="contacts__item">
						<p class="contacts__item-title">Телефон</p>
						<p class="contacts__item-text">
							<?php echo $info['phone-number']; ?>
						</p>
					</li>
				</ul>
			</div>

			<?php if ($result) : ?>
				<p style="color: blue; text-align:center; margin-bottom: 15px;">Сообщение отправлено!</p>
				<form action="#" method="post" class="contacts__form" style="background-color: #48403d;">
					<h2 class="title contacts__title">Оставить заявку</h2>
					<h5 class="benefits__item-text">Есть вопрос? Напишите нам и мы перезвоним <br> Но лучше звоните, так будет быстрее и надёжней</h5>
					<br />
					<input class="contacts__input" type="text" name="userName" value="<?php echo $userName; ?>" placeholder="Как Вас зовут?">
					<input class="contacts__input" type="tel" name="userTel" value="<?php echo $userTel; ?>" placeholder="Ваш номер телефона">
					<input class="contacts__input" type="text" name="userText" value="<?php echo $userText; ?>" placeholder="Текст сообщения">

					<input class="contacts__btn button" type="submit" name="submit" value="Отправить заявку">
				</form>
			<?php else : ?>
				<?php if (isset($errors) && is_array($errors)) : ?>
					<ul>
						<?php foreach ($errors as $error) : ?>
							<li style="color: red; list-style: none; text-align:center; margin-bottom: 15px;"> - <?php echo $error; ?></li>
						<?php endforeach; ?>
					</ul>
				<?php endif; ?>

				<form action="#" method="post" class="contacts__form" style="background-color: #48403d;">
					<h2 class="title contacts__title">Оставить заявку</h2>
					<h5 class="benefits__item-text">Есть вопрос? Напишите нам и мы перезвоним <br> Но лучше звоните, так будет быстрее и надёжней</h5>
					<br />
					<input class="contacts__input" type="text" name="userName" value="<?php echo $userName; ?>" placeholder="Как Вас зовут?">
					<input class="contacts__input" type="tel" name="userTel" value="<?php echo $userTel; ?>" placeholder="Ваш номер телефона">
					<input class="contacts__input" type="text" name="userText" value="<?php echo $userText; ?>" placeholder="Текст сообщения">

					<input class="contacts__btn button" type="submit" name="submit" value="Отправить заявку">
				</form>

			<?php endif; ?>

		</div>
	</div>
</section>



<?php include ROOT . '/views/layouts/footer.php'; ?>