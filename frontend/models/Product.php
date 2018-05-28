<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string $name
 * @property string $price
 * @property int $category_id
 * @property int $availability
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{product}}';
    }

    public function rules()
	{
		return [
			[['name', 'price'], 'required'],
			['name', 'string', 'max' => 40],
			[['price', 'category_id', 'availability'], 'integer']
		];
	}

	/**
	 * @return array|null|\yii\db\ActiveRecord
	 */
    public function getCategory()
	{
		return $this->hasOne(Category::className(), ['id' => 'category_id'])->one();
	}

	/**
	 * @return mixed|string
	 */
	public function getCategoryName()
	{
		if ($category = $this->getCategory()) {
			return $category->name;
		}

		return 'Not set';
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getProductsToManufacturersRelations()
	{
		return $this->hasMany(ProductsToManufacturers::className(), ['product_id' => 'id']);
	}

	/**
	 * @return array|\yii\db\ActiveRecord[]
	 */
	public function getManufacturers()
	{
		return $this->hasMany(Manufacturer::className(), ['id' => 'manufacturer_id'])
			->via('productsToManufacturersRelations')
			->all();
	}
}
