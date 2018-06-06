<?php

namespace frontend\models\forms;

use yii\base\Model;
use frontend\models\NewsSearch;

/**
 * Class SearchForm
 * @package frontend\models\forms
 */
class SearchForm extends Model
{
	public $keyword;

	public function rules() {
		return [
			['keyword', 'trim'],
			['keyword', 'required'],
			['keyword', 'string', 'min' => 3],
		];
	}

	public function search()
	{
		if ($this->validate()) {
			return $model = NewsSearch::FullTextSearch($this->keyword);
		}
	}

	public function searchAdvanced()
	{
		if ($this->validate()) {
			return $model = NewsSearch::AdvancedSearch($this->keyword);
		}
	}
}
