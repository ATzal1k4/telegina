<?php

defined('SYSPATH') or die('No direct script access.');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
return array(
	
	/**
	 * DAY OF WEEK 
	 */
	'Sat' => 'Суббота',
	'Sun' => 'Воскресенье',
	'Mon' => 'Понедельник',
	'Tue' => 'Вторник',
	'Wed' => 'Среда',
	'Thu' => 'Четверг',
	'Fri' => 'Пятница',
	
	'Sa' => 'Сб',
	'Su' => 'Вс',
	'Mo' => 'Пн',
	'Tu' => 'Вт',
	'We' => 'Ср',
	'Th' => 'Чт',
	'Fr' => 'Пт',
	/**
	 * MONTHS OF YEAR 
	 */
	'Jan' => 'Января',
	'Feb' => 'Февраля',
	'Mar' => 'Марта',
	'Apr' => 'Апреля',
	'May' => 'Мая',
	'Jun' => 'Июня',
	'Jul' => 'Июля',
	'Aug' => 'Августа',
	'Sep' => 'Сентября',
	'Oct' => 'Октября',
	'Nov' => 'Ноября',
	'Dec' => 'Декабря',
	
	'January' => 'Январь',
	'February' => 'Февраль',
	'March' => 'Март',
	'April' => 'Апрель',
	'May' => 'Май',
	'June' => 'Июнь',
	'July' => 'Июль',
	'August' => 'Август',
	'September' => 'Сентябрь',
	'October' => 'Октябрь',
	'November' => 'Ноябрь',
	'December' => 'Декабрь',
	////////////////////////////////
	// MODEL'S FIELDS DESCRIPTION //
	////////////////////////////////

	/**
	 * Model_Album 
	 */
	'model_album_album_id' => 'Идентификатор альбома',
	'model_album_title' => 'Заголовок альбома',
	'model_album_description' => 'Описание альбома',
	'model_album_main_photo' => 'Обложка альбома',
	'model_album_date_create' => 'Дата создания альбома',
	'model_album_date_modif' => 'Дата последнего редактирования альбома',
	'model_album_is_deleted' => 'Удалить альбом?',
	'model_album_is_hide' => 'Скрыть альбом?',
	/**
	 * Model_Comment 
	 */
	'model_comment_comment_id' => 'Идентификатор отзыва',
	'model_comment_parent_id' => 'Идентификатор родительского отзыва',
	'model_comment_text' => 'Текст отзыва',
	'model_comment_email' => 'E-Mail',
	'model_comment_nick' => 'Ваше имя',
	'model_comment_site' => 'Адрес сайта',
	'model_comment_date_create' => 'Дата создания отзыва',
	'model_comment_date_modif' => 'Дата попследнего изменения отзыва',
	'model_comment_is_hide' => 'Скрывать отзыв?',
	'model_comment_is_deleted' => 'Удалить отзыв?',
	/**
	 * Model_Config 
	 */
	'model_config_config_id' => 'Идентификатор настройки',
	'model_config_module_id' => 'Идентификатор модуля',
	'model_config_name' => 'Системное название настройки',
	'model_config_title' => 'Название настройки',
	/**
	 * Model_Configitem 
	 */
	'model_configitem_item_id' => 'Идентификатор параметра',
	'model_configitem_config_id' => 'Идентификатор настройки',
	'model_configitem_name' => 'Системное название параметра',
	'model_configitem_title' => 'Название параметра',
	'model_configitem_value' => 'Значение параметра',
	'model_configitem_type' => 'Тип параметра',
	/**
	 * Model_Link 
	 */
	'model_link_link_id' => 'Идентификатор ссылки',
	'model_link_title' => 'Текст ссылки',
	'model_link_url' => 'Ссылка',
	'model_link_date_create' => 'Дата создания ссылки',
	'model_link_date_modif' => 'Дата последнего редактирования ссылки',
	'model_link_is_deleted' => 'Удалить ссылку?',
	'model_link_is_hide' => 'Скрывать ссылку?',
	/**
	 * Model_Menu 
	 */
	'model_menu_menu_id' => 'Идентификатор меню',
	'model_menu_title' => 'Название меню',
	'model_menu_is_main' => 'Главное?',
	'model_menu_date_create' => 'Дата создания меню',
	'model_menu_date_modif' => 'Дата последнего редактирования меню',
	'model_menu_is_deleted' => 'Удалить меню?',
	'model_menu_is_hide' => 'Скрывать меню?',
	/**
	 * Model_Menuitem 
	 */
	'model_menu_item_menu_item_id' => 'Идентификатор пункта меню',
	'model_menu_item_text' => 'Название пункта меню',
	'model_menu_item_menu_id' => 'Идентификатор меню',
	'model_menu_item_parent_id' => 'Идентификатор родителя пункта меню',
	'model_menu_item_url' => 'Ссылка пункта меню',
	'model_menu_item_position' => 'Позиция пункта меню',
	'model_menu_item_date_create' => 'Дата создания пункта меню',
	'model_menu_item_date_modif' => 'Дата последнего редактирования пункта меню',
	'model_menu_item_is_deleted' => 'Удалить пункта меню?',
	'model_menu_item_is_hide' => 'Скрывать пункта меню?',
	/**
	 * Model_Module 
	 */
	'model_module_module_id' => 'Идентификатор модуля',
	'model_module_name' => 'Системное название модуля',
	'model_module_title' => 'Публичное название модуля',
	'model_module_type' => 'Тип модуля',
	'model_module_is_hide' => 'Скрывать модуль?',
	/**
	 * Model_User 
	 */
	'model_user_id' => 'Идентификатор пользователя',
	'model_user_email' => 'E-Mail адрес',
	'model_user_username' => 'Имя пользователя',
	'model_user_password' => 'Пароль',
	'model_user_logins' => 'Количество посещений',
	'model_user_last_login' => 'Дата последнего посещения',
	/**
	 * Model_Role 
	 */
	'model_role_id' => 'Идентификатор роли',
	'model_role_name' => 'Название роли',
	'model_role_description' => 'Описание роли',
	/**
	 * Model_User_Token 
	 */
	'model_user_token_id' => 'Идентификатор токена',
	'model_user_token_user_id' => 'Идентификатор пользователя',
	'model_user_token_user_agent' => 'User-Agent',
	'model_user_token_token' => 'Токен',
	'model_user_token_type' => 'Тип токена',
	'model_user_token_created' => 'Дата создания токена',
	'model_user_token_expires' => 'Время жизни токена',
	/**
	 * Model_New 
	 */
	'model_new_new_id' => 'Идентификатор новости',
	'model_new_title' => 'Заголовок новости',
	'model_new_author' => 'Автор новости',
	'model_new_announce' => 'Анонс новости',
	'model_new_text' => 'Текст новости',
	'model_new_date_create' => 'Дата создания новости',
	'model_new_date_modif' => 'Дата последнего редактирования новости',
	'model_new_is_deleted' => 'Удалить новость?',
	'model_new_is_hide' => 'Скрывать новость?',
	/**
	 * Model_Page 
	 */
	'model_page_page_id' => 'Идентификатор страницы',
	'model_page_title' => 'Заголовок страницы',
	'model_page_alias' => 'Алиас страницы',
	'model_page_text' => 'Текст страницы',
	'model_page_date_create' => 'Дата создания страницы',
	'model_page_date_modif' => 'Дата последнего редактирования страницы',
	'model_page_is_deleted' => 'Удалить страницу?',
	'model_page_is_hide' => 'Скрывать страницу?',
	/**
	 * Model_Photo 
	 */
	'model_photo_photo_id' => 'Идентификатор фото',
	'model_photo_album_id' => 'Идентификатор альбома',
	'model_photo_title' => 'Заголовок фото',
	'model_photo_description' => 'Описание фото',
	'model_photo_src' => 'Имя файла фото',
	'model_photo_date_create' => 'Дата создания фото',
	'model_photo_date_modif' => 'Дата последнего редактирования фото',
	'model_photo_is_deleted' => 'Удалить фото?',
	'model_photo_is_hide' => 'Скрывать фото?',
	/**
	 * Model_Vote 
	 */
	'model_vote_vote_id' => 'Идентификатор опроса',
	'model_vote_question' => 'Текст опроса',
	'model_vote_date_create' => 'Дата создания опроса',
	'model_vote_date_modif' => 'Дата последнего редактирования опроса',
	'model_vote_is_deleted' => 'Удалить опрос?',
	'model_vote_is_hide' => 'Скрывать опрос?',
	/**
	 * Model_Voteitem 
	 */
	'model_vote_item_vote_item_id' => 'Идентификатор варианта ответа',
	'model_vote_item_vote_id' => 'Идентификатор опроса',
	'model_vote_item_count_answer' => 'Количество ответивших',
	'model_vote_item_position' => 'Позиция варианта ответа',
	'model_vote_item_text' => 'Текст варианта ответа',
	'model_vote_item_date_create' => 'Дата создания варианта ответа',
	'model_vote_item_date_modif' => 'Дата последнего редактирования варианта ответа',
	'model_vote_item_is_deleted' => 'Удалить вариант ответа?',
	'model_vote_item_is_hide' => 'Скрывать вариант ответа?',
	/**
	 * Model_Voter 
	 */
	'model_voter_voter_id' => 'Идентификатор ответившего',
	'model_voter_vote_id' => 'Идентификатор опроса',
	'model_voter_vote_item_id' => 'Идентификатор варианта ответа',
	'model_voter_ip' => 'IP адрес ответившего',
);