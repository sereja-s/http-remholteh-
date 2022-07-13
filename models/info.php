<?php

//include_once ROOT . '/components/Db.php';

/**
 * Класс Info - модель для работы с информацией
 */
class Info
{

	/**
	 * метод возвращает информацию для главной страницы сайта (главный экран)	 
	 */
	public static function getInfoById($id)
	{
		// Соединение с БД
		$db = Db::getConnection();

		// Текст запроса к БД
		$sql = 'SELECT * FROM info WHERE id = :id';

		// Используется подготовленный запрос
		$result = $db->prepare($sql);
		$result->bindParam(':id', $id, \PDO::PARAM_INT);

		// Указываем, что хотим получить данные в виде массива
		// индексированного именами столбцов результирующего набора
		$result->setFetchMode(\PDO::FETCH_ASSOC);

		// Выполнение команды
		$result->execute();

		// Получение и возврат результатов
		return $result->fetch();
	}


	/**
	 * метод возвращает информацию для главной страницы сайта (раздел: Услуги)	 
	 */
	public static function getServicesById($id)
	{
		// Соединение с БД
		$db = Db::getConnection();

		// Текст запроса к БД
		$sql = 'SELECT * FROM our_services WHERE id = :id';

		// Используется подготовленный запрос
		$result = $db->prepare($sql);
		$result->bindParam(':id', $id, \PDO::PARAM_INT);

		// Указываем, что хотим получить данные в виде массива
		// индексированного именами столбцов результирующего набора
		$result->setFetchMode(\PDO::FETCH_ASSOC);

		// Выполнение команды
		$result->execute();

		// Получение и возврат результатов
		return $result->fetch();
	}


	/**
	 * метод возвращает информацию для главной страницы сайта (раздел: Виды работ)	 
	 */
	public static function getlistOfWorks()
	{
		// Соединение с БД
		$db = Db::getConnection();

		$worksList = [];

		// Запрос к БД
		$sql = "SELECT id, title, text FROM works_list WHERE status = '1' ";
		$result = $db->query($sql);

		// Получение и возврат результатов

		if ($result != false) {

			$i = 0;

			// Метод fetch()- возвращает 1-ну запись (строку) из всех выбранных SQL-запросом
			// (если в выборку попали несколько записей, то в цикле можно получить следующий элемент)
			while ($row = $result->fetch()) {
				$worksList[$i]['id'] = $row['id'];
				$worksList[$i]['title'] = $row['title'];
				$worksList[$i]['text'] = $row['text'];
				$i++;
			};
		}

		return $worksList;
	}

	/**
	 * Возвращает путь к изображению в блоке с информацией
	 * @param integer $id
	 * @return string <p>Путь к изображению</p>
	 */
	public static function getImage($id)
	{
		// Название изображения-пустышки
		$noImage = 'no-image.png';

		// Путь к папке с информацией для шапки
		$path = '/upload/images/info/';

		// Путь к изображению товара
		$pathToInfoImage = $path . $id . '.png';

		if (file_exists($_SERVER['DOCUMENT_ROOT'] . $pathToInfoImage)) {
			// Если изображение для товара существует
			// Возвращаем путь изображения товара
			return $pathToInfoImage;
		}

		// Возвращаем путь изображения-пустышки
		return $path . $noImage;
	}

	public static function getLogoImage($id)
	{
		// Название изображения-пустышки
		$noLogoImage = 'no-logoimage.png';

		// Путь к папке с логотипами
		$path = '/upload/images/logo/';

		// Путь к изображению лоотипа
		$pathToLogoImage = $path . $id . '.png';

		if (file_exists($_SERVER['DOCUMENT_ROOT'] . $pathToLogoImage)) {
			// Если изображение логотипа существует
			// Возвращаем путь изображения 
			return $pathToLogoImage;
		}

		// Возвращаем путь изображения-пустышки
		return $path . $noLogoImage;
	}

	public static function getBg($id)
	{
		// Название изображения-пустышки
		$noBg = 'no-bg.jpg';

		// Путь к папке с логотипами
		$path = '/upload/images/bg/';

		// Путь к изображению лоотипа
		$pathToBg = $path . $id . '.jpg';

		if (file_exists($_SERVER['DOCUMENT_ROOT'] . $pathToBg)) {
			// Если изображение логотипа существует
			// Возвращаем путь изображения 
			return $pathToBg;
		}

		// Возвращаем путь изображения-пустышки
		return $path . $noBg;
	}
}
