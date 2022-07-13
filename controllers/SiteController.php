<?php

include_once ROOT . '/models/info.php';
include_once ROOT . '/models/User.php';

class SiteController
{
	public function actionIndex()
	{

		//echo '<br><br>Применились: SiteController, actionIndex ';

		$info = info::getInfoById(1);

		$service = Info::getServicesById(1);

		$works = Info::getlistOfWorks();

		/* echo '<pre>';
		print_r($info);
		echo '<pre>';

		echo '<pre>';
		print_r($service);
		echo '<pre>';

		echo '<pre>';
		print_r($works);
		echo '<pre>'; */

		// Переменные для формы
		$userName = '';
		$userTel = '';
		$userText = '';
		$result = false;

		// Обработка формы
		if (isset($_POST['submit'])) {
			// Если форма отправлена получаем данные из формы
			$userName = $_POST['userName'];
			$userTel = $_POST['userTel'];
			$userText = $_POST['userText'];

			// Флаг ошибок
			$errors = false;

			// Валидация полей
			if (!User::checkPhone($userTel)) {
				$errors[] = 'Телефонный номер <br> должен содержать не меньше, <br> чем 10 символов';
			}

			if ($errors == false) {
				// Если ошибок нет отправляем письмо администратору

				$adminEmail = 'sait_postroen@mail.ru';
				$message = "Текст: {$userText} . От {$userName} .  {$userTel}";
				$subject = 'Тема письма';
				$result = mail($adminEmail, $subject, $message);
				//$result = true;
			}
		}

		// Подключаем вид
		require_once(ROOT . '/views/site/index.php');

		return true;
	}
}
