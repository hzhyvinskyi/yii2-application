<?php

namespace frontend\models;

use Yii;

class NewsSearch
{
	public static function simpleSearch($keyword)
	{
		$sql = "SELECT * FROM news WHERE content LIKE '%$keyword%' LIMIT 30";

		return Yii::$app->db->createCommand($sql)->queryAll();
	}

	public static function fullTextSearch($keyword)
	{
		$sql = "SELECT * FROM news WHERE MATCH (content) AGAINST ('$keyword') LIMIT 30";

		return Yii::$app->db->createCommand($sql)->queryAll();
	}
}
