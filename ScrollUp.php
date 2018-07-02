<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 30.06.2018
 * Time: 21:46
 */
/**
 * @return array
 */
function ScrollUp_config() {
	$config = [
		"name"        => "Прокрутка в верх",
		"description" => "",
		"version"     => "1",
		"author"      => "service-voice",
		"fields"      => [
			"AdminArea" => [
				"FriendlyName" => "Показывать в админ панели ?",
				"Type"         => "yesno",
				"Size"         => "25",
				"Description"  => "Отметьте, чтобы включить модуль для области администратора",
			],
			"ClientArea" => [
				"FriendlyName" => "Показывать в области клиента ?",
				"Type"         => "yesno",
				"Size"         => "25",
				"Description"  => "Отметьте, чтобы включить модуль для клиентской области",
			],
			"Style"   => [
				"FriendlyName" => "Стиль",
				"Type"         => "dropdown",
				"Options"      =>
					"Tab,Pill,Link,Image",
				"Description"  => "",
				"Default"      => "Image",
			],
			"Image"   => [
				"FriendlyName" => "Изображение",
				"Type"         => "radio",
				"Options"      =>
					"Стиль 1,Стиль 2,Стиль 3,Стиль 4,Стиль 5,Стиль 6,Свое изображение",
				"Description"  => "Только для типа \"Image\"",
			],
			"ImageURL" => [
				"FriendlyName" => "Ссылка на свое изображение",
				"Type"         => "text",
				"Size"         => "25",
				"Description"  => "Только для типа \"Image\"",
				"Default"      => "",
			],
			"TextButton" => [
				"FriendlyName" => "Текст кнопки",
				"Type"         => "text",
				"Size"         => "25",
				"Description"  => "Работает для всх типов кроме \"Image\"",
				"Default"      => "Вернуться на верх",
			],
		]
	];

	return $config;
}
