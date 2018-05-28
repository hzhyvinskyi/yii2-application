<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "products_to_manufacturers".
 *
 * @property int $id
 * @property int $product_id
 * @property int $manufacturer_id
 */
class ProductsToManufacturers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{products_to_manufacturers}}';
    }
}
