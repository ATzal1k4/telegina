<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Encryptor {

	/** @var string строка-ключ */
	private static $keyString = '7wdjkri5j';

	/**
	 * Производит непосредственно (де-)шифрование побитовым сравнением двух строк (поддерживает UTF)
	 * @param string $InputString Строка для шифрования
	 * @param string $KeyString Строка-ключ
	 * @return string Зашифрованная строка
	 */
	public static function xorEncrypt($InputString, $KeyString) {
		$KeyStringLength = mb_strlen($KeyString);
		$InputStringLength = mb_strlen($InputString);
		for ($i = 0; $i < $InputStringLength; $i++) {
			// Если входная строка длиннее строки-ключа
			$rPos = $i % $KeyStringLength;
			// Побитовый XOR ASCII-кодов символов
			$r = ord($InputString[$i]) ^ ord($KeyString[$rPos]);
			// Записываем результат - символ, соответствующий полученному ASCII-коду
			$InputString[$i] = chr($r);
		}
		return $InputString;
	}

	/**
	 * Вспомогательная функция для шифрования в строку, удобную для использования в ссылках
	 * @param string $InputString
	 * @return string
	 */
	public static function encrypt($InputString) {
		$str = self::xorEncrypt($InputString, self::$keyString);
		$str = self::base64EncodeUrl($str);
		return $str;
	}

	/**
	 * Вспомогательная функция для дешифрования из строки, удобной для использования в ссылках (парный к @link self::encrypt())
	 * @param string $InputString
	 * @return string
	 */
	public static function decrypt($InputString) {
		$str = self::base64DecodeUrl($InputString);
		$str = self::xorEncrypt($str, self::$keyString);
		return $str;
	}

	/**
	 * Кодирование в base64 с заменой url-несовместимых символов
	 * @param string $Str
	 * @return string
	 */
	public static function base64EncodeUrl($Str) {
		return strtr(base64_encode($Str), '+/=', '-_,');
	}

	/**
	 * Декодирование из base64 с заменой url-несовместимых символов (парный к @link self::base64EncodeUrl())
	 * @param string $Str
	 * @return string
	 */
	public static function base64DecodeUrl($Str) {
		return base64_decode(strtr($Str, '-_,', '+/='));
	}

}