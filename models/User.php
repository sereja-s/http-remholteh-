<?php

/**
 * Класс User - модель для работы с пользователями
 */
class User
{

	/**
	 * Проверяет телефон: не меньше, чем 10 символов
	 * @param string $phone <p>Телефон</p>
	 * @return boolean <p>Результат выполнения метода</p>
	 */
	public static function checkPhone($phone)
	{
		if (strlen($phone) >= 10) {
			return true;
		}
		return false;
	}
}
