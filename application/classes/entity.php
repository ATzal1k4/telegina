<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Entity {

	const MOVE_UP = 0;
	const MOVE_DOWN = 1;

	public static $errorMsgsDir = 'models';

	/**
	 * Скрыть сущность от общего доступа
	 * @param ORM $entity
	 * @return bool
	 */
	public static function hide(ORM $entity) {
		return $entity->set("is_hide", 1)->save()->saved();
	}

	/**
	 * Открыть общий доступ к сущности
	 * @param ORM $entity
	 * @return bool
	 */
	public static function show(ORM $entity) {
		return $entity->set("is_hide", 0)->save()->saved();
	}

	/**
	 * Удалить сущность
	 * @param ORM $entity
	 * @return bool
	 */
	public static function delete(ORM $entity) {
		$return = FALSE;
		try {
			$return = $entity->set("is_deleted", 1)
					->save()
					->saved();
		} catch (ORM_Validation_Exception $exc) {
			print_r($exc->errors('models'));
			die;
		}

		return $return;
	}

	/**
	 *
	 * @param ORM $entity
	 * @return bool
	 */
	public static function undelete(ORM $entity) {
		return $entity->set("is_deleted", 0)->save()->saved();
	}

	/**
	 * Понизить позицию сущности
	 * @param ORM $entity
	 * @param array $attributes
	 * @return boolean
	 */
	public static function moveUP(ORM $entity, array $attributes = array()) {
		try {
			if ($entity->loaded()) {

				$maxPos = Entity::getNextPosition($entity->table_name(), $attributes) - 1;
				if ($entity->position == $maxPos) {
					return FALSE;
				}

				$thatEntity = ORM::factory($entity->object_name())
						->where('position', '>', $entity->position)
						->order_by("position", "ASC")
						->limit(1);

				foreach ($attributes as $key => $value) {
					$thatEntity = $thatEntity->and_where($key, '=', $value);
				}

				$thatEntity = $thatEntity->find();

				if ($thatEntity->loaded()) {

					$pos = $entity->position;
					$entity->position = $thatEntity->position;
					$thatEntity->position = $pos;

					try {

						$thatEntity->save();
						$entity->save();

						if ($thatEntity->saved() and $entity->saved())
							return TRUE;
					} catch (ORM_Validation_Exception $exc) {
						ErrorManager::getInstance()->setErrors($exc->errors(Entity::$errorMsgsDir));
					}
				}
			}
			return FALSE;
		} catch (Exception $exc) {
			ErrorManager::getInstance()->addException($exc);
		}
	}

	/**
	 * Повысить позицию сущности
	 * @param ORM $entity
	 * @param array $attributes
	 * @return boolean
	 */
	public static function moveDOWN(ORM $entity, array $attributes = array()) {

		if ($entity->loaded()) {

			$minPos = Entity::getMinPosition($entity->table_name(), $attributes);
			if ($entity->position == $minPos) {
				return FALSE;
			}

			$thatEntity = ORM::factory($entity->object_name())
					->where('position', '<', $entity->position)
					->order_by("position", "DESC")
					->limit(1);

			foreach ($attributes as $key => $value) {
				$thatEntity = $thatEntity->and_where($key, '=', $value);
			}

			$thatEntity = $thatEntity->find();

			if ($thatEntity->loaded()) {

				$pos = $entity->position;
				$entity->position = $thatEntity->position;
				$thatEntity->position = $pos;

				try {

					$entity->save();
					$thatEntity->save();

					if ($entity->saved() and $thatEntity->saved()) {
						return TRUE;
					} else {
						return FALSE;
					}
				} catch (ORM_Validation_Exception $exc) {
					ErrorManager::getInstance()->setErrors($exc->errors(Entity::$errorMsgsDir));
				}
			}
		}

		return FALSE;
	}

	/**
	 * Получить номер следующей позиции
	 * @param string $tableName
	 * @param array $attributes
	 * @return int
	 */
	public static function getNextPosition($tableName, array $attributes = array()) {
		$pos = DB::select(array('MAX("position")', 'max_position'))
				->from($tableName);

		foreach ($attributes as $key => $value) {
			$pos = $pos->and_where($key, '=', $value);
		}

		$pos = $pos->execute()
				->as_array();
		return ($pos[0]['max_position'] + 1);
	}

	/**
	 * Получить номер минимальной позиции
	 * @param string $tableName
	 * @return int
	 */
	public static function getMinPosition($tableName, array $attributes = array()) {
		$pos = DB::select(array('MIN("position")', 'min_position'))
				->from($tableName);

		foreach ($attributes as $key => $value) {
			$pos = $pos->and_where($key, '=', $value);
		}

		$pos = $pos->execute()
				->as_array();
		return ($pos[0]['min_position']);
	}

	/**
	 * Получение массива неудаленных сущностей
	 * @param string $entityName
	 * @param int $limit
	 * @param int $offset
	 * @return array[ORM]
	 */
	public static function listsNonDeleted($entityName, $limit = NULL, $offset = NULL, $order_by = "", $order_type = "desc") {

		$entities = ORM::factory($entityName)
				->where("is_deleted", '=', 0);

		if ($limit && $offset) {
			$entities = $entities->limit($limit)->offset($offset);
		} elseif ($limit && !$offset) {
			$entities = $entities->limit($limit);
		}

		if ($order_by != "") {
			$entities = $entities->order_by($order_by, $order_type);
		}

		$entities = $entities->find_all();

		return $entities;
	}

	/**
	 * Получение массива нескрытых и неудаленных сущностей
	 * @param string $entityName
	 * @param int $limit
	 * @param int $offset
	 * @return array[ORM]
	 */
	public static function listsNonHidable($entityName, $limit = NULL, $offset = NULL, $order_by = "", $order_type = "desc") {
		$entities = ORM::factory($entityName)
				->where("is_deleted", '=', 0)
				->and_where('is_hide', '=', 0);

		if ($limit && $offset) {
			$entities = $entities->limit($limit)->offset($offset);
		} elseif ($limit && !$offset) {
			$entities = $entities->limit($limit);
		}

		if ($order_by != "") {
			$entities = $entities->order_by($order_by, $order_type);
		}

		$entities = $entities->find_all();

		return $entities;
	}

	public static $uploadDirectory = "/media/uploads/userfiles/albums/";
	public static $defaultImageExt = "jpg";
	public static $fullImageWidth = 500;
	public static $fullImageHeight = 333;
	public static $smallImageWidth = 180;
	public static $smallImageHeight = 133;

	/**
	 *
	 * @param string $file
	 * @param string $ext
	 * @param string $dir
	 * @return string
	 */
	public static function uploadImage($file, $ext = NULL, $dir = NULL) {
		if ($dir == NULL) {
			$dir = trim(Entity::$uploadDirectory, '/');
		}

		if ($ext == NULL) {
			$ext = Entity::$defaultImageExt;
		}

		$fileName = uniqid();

		$im = Image::factory($file);
		if ($im->width > Entity::$fullImageWidth || $im->height > Entity::$fullImageHeight) {
			$im->resize(Entity::$fullImageWidth, Entity::$fullImageHeight);
		}
		$im->save("$dir/full_$fileName.$ext");

		$im = Image::factory($file);
		if ($im->width > Entity::$smallImageWidth || $im->height > Entity::$smallImageHeight) {
			$im->resize(Entity::$smallImageWidth, Entity::$smallImageHeight);
		}
		$im->save("$dir/small_$fileName.$ext");

		$im = Image::factory($file)
				->save("$dir/$fileName.$ext");

		return "$fileName.$ext";
	}

}