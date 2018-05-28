<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Product;
use frontend\models\Category;
use frontend\models\Manufacturer;

class ShopController extends \yii\web\Controller
{
    public function actionIndex()
    {
    	$productList = Product::find()->orderBy('price')->all();

        return $this->render('index', [
        	'productList' => $productList,
		]);
    }

    public function actionCreateProduct()
	{
		$product = new Product;

		if ($product->load(Yii::$app->request->post()) && $product->save()) {
			Yii::$app->session->setFlash('success', 'Product has been added');

			return $this->refresh();
		}

		return $this->render('create-product', [
			'product' => $product,
		]);
	}

	public function actionCreateCategory()
	{
		$category = new Category;

		if ($category->load(Yii::$app->request->post()) && $category->save()) {
			Yii::$app->session->setFlash('success', 'Category has been added');

			return $this->refresh();
		}

		return $this->render('create-category', [
			'category' => $category,
		]);
	}

	public function actionCreateManufacturer()
	{
		$manufacturer = new Manufacturer();

		if ($manufacturer->load(Yii::$app->request->post()) && $manufacturer->save()) {
			Yii::$app->session->setFlash('success', 'Manufacturer has been added');

			return $this->refresh();
		}

		return $this->render('create-manufacturer', [
			'manufacturer' => $manufacturer,
		]);
	}
}
