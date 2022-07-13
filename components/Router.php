<?php

namespace components;

use exceptions\RouteException;

/**
 * Класс Router
 * Компонент для работы с маршрутами
 */
class Router
{

	/**
	 * Свойство для хранения массива роутов (маршрутов)
	 * @var array 
	 */
	private $routes;

	/**
	 * Конструктор
	 */
	public function __construct()
	{
		// Путь к файлу с роутами
		$routesPath = ROOT . '/config/routes.php';

		//echo 'Путь к базовой директории-ROOT: ' . ROOT;
		//echo '<pre>';

		// Получаем роуты из файла (присваиваем св-ву: $routes массив с маршрутами из файла : routes.php, находящийся по указанному пути)
		$this->routes = include($routesPath);
	}

	/**
	 * Возвращает строку запроса
	 */
	private function getURI()
	{
		if (!empty($_SERVER['REQUEST_URI'])) {
			return trim($_SERVER['REQUEST_URI'], '/');
		}
	}

	/**
	 * Метод для обработки запроса
	 */
	public function run()
	{

		//echo 'Class: Router, method: run';
		//echo '<pre>';

		//echo 'все прописанные маршруты из массива в переменной: $this->routes: <br>';
		//print_r($this->routes);
		//echo '<pre>';

		//var_dump($this->routes);
		//echo '</pre>';

		// Получаем строку запроса
		$uri = $this->getURI();

		//echo 'строка запроса (в $uri): ' . $uri;

		// Проверяем наличие такого запроса в массиве маршрутов (в config/routes.php)
		foreach ($this->routes as $uriPattern => $path) {

			//echo "<br> шаблон запроса(uriPattern) -> внутренний путь(path):  $uriPattern -> $path";

			// Сравниваем $uriPattern и $uri
			if (preg_match("~^$uriPattern~", $uri)) {

				//echo '<br>Где ищем: uri (запрос который набрал пользователь): ' . $uri;
				//echo '<br>Что ищем: uriPattern (совпадене из правила(шаблона запроса): ' . $uriPattern;
				//echo '<br>Кто обрабатывает: path (внутреннй путь к нужному экшену): ' . $path;


				// Получаем внутренний путь из внешнего согласно правилу.
				$internalRoute = preg_replace("~^$uriPattern~", $path, $uri);

				//echo '<br><br>Получаем внутренний путь в $internalRoute: ';
				//var_dump($internalRoute);

				$internalRoute = trim($internalRoute, '?i=1');

				//var_dump($internalRoute);

				// Определить контроллер, action, параметры 

				// разделим строку по символу: /
				$segments = explode('/', $internalRoute);

				//echo '<pre>';
				//echo 'разделим на сегменты по символу: / и сохраним в $segments: <br>';
				//print_r($segments);
				//echo '<pre>';

				// получим имя контроллера (1-ый элемент массива в $segments)
				$controllerName = array_shift($segments) . 'Controller';

				//echo 'формируем имя контроллера: ' . $controllerName;

				// сделаем 1-ю букву в имени контроллера заглавной
				$controllerName = ucfirst($controllerName);

				//echo '<br>сделаем 1-ю букву в имени контроллера заглавной: ' . $controllerName;

				// получим название экшена (метода в контроллере) Это 2-ой элемент массива в $segments
				$actionName = 'action' . ucfirst(array_shift($segments));

				//echo '<br>формируем назване экшена: ' . $actionName;

				// получим то что осталось от строки внутреннего пути (массив с параметрами)
				$parameters = $segments;


				//echo '<br><br>массив с параметрами: <br> ';

				//print_r($parameters);
				//echo '<pre>';

				// Подключить файл класса-контроллера

				// прописываем путь к файлу (конроллеру), который нужно подключить
				$controllerFile = ROOT . '/controllers/' .
					$controllerName . '.php';

				// проверяем существует ли такой файл на диске и если существует , то подключаем его
				if (file_exists($controllerFile)) {
					include_once($controllerFile);
				}

				// Создать объект класса-контроллера, вызвать метод (т.е. action)
				$controllerObject = new $controllerName;

				//$result = $controllerObject->$actionName($parameters);

				// Вызываем необходимый метод ($actionName) у определенного класса ($controllerObject) с заданными параметрами ($parameters)
				$result = call_user_func_array(array($controllerObject, $actionName), $parameters);

				// Если метод контроллера успешно вызван, завершаем работу роутера
				if ($result != null) {
					break;
				}
			}
		}
	}
}
