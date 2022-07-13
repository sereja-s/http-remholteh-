<?php

/**
 * Класс Db
 * Компонент для работы с базой данных
 */
class Db
{

	/**
	 * Устанавливает соединение с базой данных
	 * @return \PDO <p>Объект класса PDO для работы с БД</p>
	 */
	public static function getConnection()
	{
		// Получаем параметры подключения из файла

		// получаем путь к файлу с параметрами БД
		$paramsPath = ROOT . '/config/db_params.php';
		// подключаем массив параметров БД
		$params = include($paramsPath);

		// Устанавливаем соединение с Бд

		$dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
		// создаём объект класса PDO
		$db = new PDO($dsn, $params['user'], $params['password']);

		// Задаем кодировку
		$db->exec("set names utf8");

		// водвращаем объект класса PDO
		return $db;
	}
}
